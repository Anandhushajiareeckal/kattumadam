<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\offering;
use App\Models\offering_detail;
class OfferingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offering = offering::all();
        return view('admin.offering.offering', ['offering'=>$offering]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $offering = new offering();
        $offering->heading = request("offering");
        $offering->save();
        return redirect('/admin/offering');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $offering =  offering::find($id);
        return view('admin.offering.offering_edit',['offering'=>$offering]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $offering = offering::find($id);
        $offering->heading = request("heading");
        $offering->save();
        return redirect('/admin/offering');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $offering = offering::find($id);
        $offering_details = offering_detail::where('offering_id', $id);
        $offering_details->delete();
        $offering->delete();
        return redirect('/admin/offering');
    }

    public function offering_details(string $id){
        $offering_details = offering_detail::where('offering_id', $id)->get();
        $offr = $id;
        $offering = offering::find($id);
        return view('admin.offering.offering_details', ['offering_details' => $offering_details, 'offr' => $offr, 'offering'=>$offering]);
    }
    

    public function offering_details_store(Request $request, string $id){
        $offering_details = new offering_detail();
        $offering_details->offering_id = $id;
        $offering_details->details = request("offering");
        $offering_details->save();
        return redirect('/admin/offering/details/'.$id);
    }

    public function offering_detail_edit(string $id , $offr){
        $offering_details = offering_detail::find($id);
        return view('admin.offering.offering_details_edit',['offering_details'=>$offering_details, 'offr'=>$offr]);
    }

    public function offering_detail_update(Request $request, string $id, $offr){
        $offering_details = offering_detail::find($id);
        $offering_details->details = request("offering");
        $offering_details->save();
        return redirect('/admin/offering/details/'.$offr);

    }

    public function offering_detail_delete(string $id, $offr){
        $offering = offering_detail::find($id);
        $offering->delete();
        return redirect('/admin/offering/details/'.$offr);
    }
}
