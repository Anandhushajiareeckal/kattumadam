@extends('layouts.admin')
@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">			
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body card-main-three">
                    <h5 class="m-4">Edit contact </h5>
                    <form class="form-floating" action="{{ route('contact_update') }}" method="POST" >
                        @csrf
                        @method("PUT")
                      
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="number" class="form-control" id="TextInput" required placeholder="Name" name="number" value="{{$contact->number}}">
                                <label class="" for="TextInput">Number</label>
                            </span>
                        </div>
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="email" class="form-control" id="TextInput" required placeholder="Name" name="email" value="{{$contact->email}}">
                                <label class="" for="TextInput">Email</label>
                            </span>
                        </div>
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" id="TextInput" required placeholder="Name" name="location" value="{{$contact->location          }}">
                                <label class="" for="TextInput">Location</label>
                            </span>
                        </div>
                        
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" id="TextInput" required placeholder="Name" name="map" value="{{$contact->map}}">
                                <label class="" for="TextInput">Map</label>
                            </span>
                        </div>
                        
                      
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a href="/admin/dashboard" class="btn btn-outline-secondary">Cancel</a>

                        </div>
                      
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection