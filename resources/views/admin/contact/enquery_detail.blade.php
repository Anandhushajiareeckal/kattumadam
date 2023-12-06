@extends('layouts.admin')
@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">
    <div class="row g-0">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="m-0">Home</h6>
                    <div class="form-check form-switch table-toggle-one">
                        {{-- <a href="{{ route('event_view')}}" class="btn btn-primary">Add</a> --}}
                    </div>
                </div>
                <div class="card-body table-main-one">
                    <div class="table-responsive">
                        <h5>Name :</h5><h6>{{$enquiry->name}}</h6><br><br>
                        <h5>Email :</h5><h6>{{$enquiry->email}}</h6><br><br>
                        <h5>Subject :</h5><h6>{{$enquiry->subject}}</h6><br><br>
                        <h5>Message :</h5><h6>{{$enquiry->message}}</h6><br><br>
                    </div>
                </div>
                <a href="{{ route('enquiry_list')}}" class="btn btn-primary">Close</a>
            </div>
        </div>
    </div>
    
</div>
@endsection