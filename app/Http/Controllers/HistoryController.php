<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\history;
use Illuminate\Support\Facades\File;
class HistoryController extends Controller
{
    public function index()
    {
        $id = 1;
        $history = history::find($id);
        return view('admin.history.history_edit',['history'=>$history]);
    }

 
    public function update(Request $request)
    {
        $id = 1;
        $history = history::find($id);
        if ($history) {
            $imagePath = public_path($history->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $history -> image = '/images/'.$imageName;
        }
        $history->heading = request("heading");
        $history->description = request("description");
        $history->content = request("content");

        $history->save();
        return redirect('/admin/history');
    }
}
