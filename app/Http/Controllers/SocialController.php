<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\social;
class SocialController extends Controller
{
    public function index(){
    $admin_social = social::all();
    return view('admin.settings.social_media.social_media',['admin_social'=>$admin_social]);
    }
    public function add(){
        return view('admin.settings.social_media.add');
    }

    public function store(){
        $admin_social = new social();
        $admin_social->icon = request("icon");
        $admin_social->link = request("link");
        if (isset($_POST["status"])) {
            $admin_social->status = true;
        } else {
            $admin_social->status = false;
        }

        $admin_social->save();
        return redirect('/admin/social');
    }

    public function edit(string $id){
        $admin_social = social::find($id);
        return view('admin.settings.social_media.edit',['admin_social'=>$admin_social]);
        

    }

    public function update(Request $request, string $id){
        $admin_social = social::find($id);
        $admin_social->icon = request("icon");
        $admin_social->link = request("link");
        if (isset($_POST["status"])) {
            $admin_social->status = true;
        } else {
            $admin_social->status = false;
        }

        $admin_social->save();
        return redirect('/admin/social');
        
    }
    public function delete(string $id){
        $enquiry = social::find($id);
        $enquiry->delete();
        return redirect('/admin/social');
    }
}
