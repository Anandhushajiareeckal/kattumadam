<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;
use Illuminate\Support\Facades\File;
class EventController extends Controller
{
    public function index(){
        $event = event::all();
        return  view('admin.event.event',['event'=>$event]);
    }

    public function view(){
        return  view('admin.event.event_add');

    }

    public function store(Request $request){
        $event = new event();
        $event->heading = request("heading");
        $event->description = request("description");
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $event -> image = '/images/'.$imageName;
        }
        $event->content = request("content");
        $event->save();
        return redirect('/admin/event/');
    }

    public function edit(string $id){
        $event = event::find($id);
        return  view('admin.event.event_edit',['event'=>$event]);

    }


    public  function update(Request $request, string $id){
        $event =  event::find($id);
       
        $event->heading = request("heading");
        $event->description = request("description");
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // You can also store the image path in your database if needed
             $event -> image = '/images/'.$imageName;
        }
        $event->content = request("content");
       
        $event->save();
        return redirect('/admin/event/');
    }

    public function destroy(string $id)
    {
        $event = event::find($id);
        if ($event) {
            $imagePath = public_path($event->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
    
            $event->delete();
            return redirect('/admin/event/');
        }
    }
}
