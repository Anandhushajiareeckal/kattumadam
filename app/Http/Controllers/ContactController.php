<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\enquirey;
class ContactController extends Controller
{
    public function index(){
        $contact = contact::find($id=1);
        return view('admin.contact.contact',['contact'=>$contact]);
    }

    public function update(Request $request){
        $id =  1;
        $contact = contact::find($id);
        $contact->number = $request->input("number");
        $contact->email = $request->input("email");
        $contact->location = $request->input("location");
        $contact->map = $request->input("map");
        $contact->save();
        return redirect('/admin/contact');
    }

    public function enquirey(Request $request){
        $enquirey = new enquirey();
        $enquirey->name = $request->input("name");
        $enquirey->email = $request->input("email");
        $enquirey->subject = $request->input("subject");
        $enquirey->message = $request->input("message");
        $enquirey->save();
        return redirect('/contact');
    }

    public function enquiry_list(){
        $enquiry = enquirey::all();
        return  view('admin.contact.enquirey',['enquiry'=>$enquiry]);

    }

    public function enquiry_detail(string $id){
        $enquiry = enquirey::find($id);
        return  view('admin.contact.enquery_detail',['enquiry'=>$enquiry]);

    }

    public function enquiry_delete(string $id){
        $enquiry = enquirey::find($id);
        $enquiry->delete();
        return redirect('/admin/contact/enquiry');
    }

}
