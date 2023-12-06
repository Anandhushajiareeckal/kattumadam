<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\logo;
use App\Models\baner;
class SettingsController extends Controller
{
    public function logo(){
        $id = 1;
        $logo = logo::find($id);
        return view('admin.settings.logo.logo',['logo'=>$logo]);
    }

    public function update(Request $request){
        $id = 1;
        $logo = logo::find($id);
        if (request("fav")) {
            $imagePath = public_path($logo->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }
        if ($request->file('fav')) {
            $image = $request->file('fav');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $logo -> fav = '/images/'.$imageName;
        }
        if (request("logo")) {
            $imagePath = public_path($logo->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }
        if ($request->file('logo')) {
            $image = $request->file('logo');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $logo -> logo = '/images/'.$imageName;
        }
        $logo->save();
        return redirect('/admin/logo');
    }
    public function banner(){
        $banner = baner::all();
        return view('admin.settings.banner.banner_list',['banner'=>$banner]);
    }

    public function banner_update(){
        $banner = baner::all();
        return view('admin.settings.banner.banner_list',['banner'=>$banner]);
    }

    public function banner_edit(string $id){
        $banner = baner::find($id);
        return view('admin.settings.banner.banner_edit',['banner_edit'=>$banner]);
    }

    public function banner_save(Request $request, string $id){
        $banner = baner::find($id);
        $banner ->heading = request('heading');
        if (request("image")) {
            $imagePath = public_path($banner->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $banner -> image = '/images/'.$imageName;
        }
        $banner->save();
        return redirect('/admin/banner');
       
    }
}
