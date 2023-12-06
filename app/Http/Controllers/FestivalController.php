<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\festivals;
class FestivalController extends Controller
{
    public function index(){
        $id = 1;
        $festival = festivals::find($id);
        return view('admin.festivals.festivals',['festival'=>$festival]);
    }
    public function update(Request $request)
    {
        $offering = festivals::find($id=1);
        $offering->content = request("content");
        $offering->save();
        return redirect('/admin/festival');
    }
}
