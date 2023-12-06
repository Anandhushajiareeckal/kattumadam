<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\about;
class AboutController extends Controller
{
    public function index()
    {
        $id = 1;
        $tt_about = about::find($id);
        return view('admin.about.about',['tt_about'=>$tt_about]);
    }

 
    public function update(Request $request)
    {
        $id = 1;
        $tt_about = about::find($id);
        if (request("image")) {
            $imagePath = public_path($tt_about->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

             $tt_about -> image = '/images/'.$imageName;
        }
        $tt_about->heading = request("heading");
        $tt_about->description = request("description");
        $tt_about->content = request("content");

        $tt_about->save();
        return redirect('/admin/about');
    }
}
