<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\home_banner;
use App\Models\home_about;
class IndexController extends Controller
{
    public function home(){

    }
    public function dashboard(){
        return view('layouts.admin');
    }

    public function banner_list(){
        $home_banner = home_banner::all();
        return view('admin.hom.banner_list',['admin_banner'=>$home_banner]);


    }

    public function banner_add(){
        return view('admin.hom.banner_add');
    }

    public function banner_store(Request $request){
        $admin_banner = new home_banner();
        $admin_banner->heading = request("heading");
        $admin_banner->description = request("description");
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $admin_banner -> image = '/images/'.$imageName;
        }
        $admin_banner->save();
        return redirect('/admin/home/banner/list');
    }

    public function banner_edit(string $id){
        $admin_banner = home_banner::find($id);
        return view('admin.hom.banner_edit',['admin_banner'=>$admin_banner]);

    }

    public  function banner_update(Request $request, string $id){
        $admin_banner = home_banner::find($id);
        if ($admin_banner) {
            $imagePath = public_path($admin_banner->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }
        $admin_banner->heading = request("heading");
        $admin_banner->description = request("description");
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $admin_banner -> image = '/images/'.$imageName;
        }
        $admin_banner->save();
        return redirect('/admin/home/banner/list');
    }

    public  function banner_delete( string $id){
        $admin_banner = home_banner::find($id);
        if ($admin_banner) {
            $imagePath = public_path($admin_banner->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
    
            $admin_banner->delete();
        }
    }

    public function home_about(){
        $home_about = home_about::find($id=1);
        return view('admin.hom.hom_about',['home_about'=>$home_about]);
    }

    public function home_about_update(Request $request){
        $home_about = home_about::find($id=1);
        $home_about->heading = request("heading");
        $home_about->description_1 = request("description_1");
        $home_about->description_2 = request("description_2");

        if ($request->file('image_1')) {
            $image = $request->file('image_1');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $home_about -> image_1 = '/images/'.$imageName;
        }
        if ($request->file('image_2')) {
            $image = $request->file('image_2');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $home_about -> image_2 = '/images/'.$imageName;
        }
        $home_about->save();
        return redirect('/admin/home/about');
    }

    
}
