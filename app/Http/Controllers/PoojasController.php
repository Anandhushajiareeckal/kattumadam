<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\pooja;
use App\Models\pooja_timing;
class PoojasController extends Controller
{
    public function index()
    {
        $id = 1;
        $pooja = pooja::find($id);
        return view('admin.pooja.pooja',['pooja'=>$pooja]);
    }

 
    public function update(Request $request)
    {
        $id = 1;
        $poojas = pooja::find($id);
        if ($poojas) {
            $imagePath = public_path($poojas->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $poojas -> image = '/images/'.$imageName;
        }
        $poojas->heading = request("heading");
        $poojas->description = request("description");
        $poojas->content = request("content");

        $poojas->save();
        return redirect('/admin/pooja');
    }

    public function pooja_time()
    {
        $id = 1;
        $pooja_timing = pooja_timing::find($id);
        return view('admin.pooja.poojas_time',['pooja_timing'=>$pooja_timing]);
    }

 
    public function pooja_time_edit(Request $request)
    {
        $id = 1;
        $pooja_timing = pooja_timing::find($id);
        $pooja_timing->description = request("description");
        $pooja_timing->mrng_time = request("mrng_time");
        $pooja_timing->evng_time = request("evng_time");
        $pooja_timing->save();
        return redirect('/admin/poojas_time');
    }
}
