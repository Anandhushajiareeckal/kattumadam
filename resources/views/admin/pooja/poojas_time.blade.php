@extends('layouts.admin')
@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">			
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body card-main-three">
                    <h5 class="m-4">Edit Temple </h5>
                    <form class="form-floating" action="{{ route('pooja_time_edit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                       
                       
                       
                        <span >
                            <label class="form-label" for="TextInput">Description</label>
                            <textarea class="form-control" id="TextArea" rows="8" cols="30" required placeholder="Comment" name="description" value="">{{$pooja_timing->description}}</textarea>
                            <label class="" for="TextArea">Description</label><br>
                        </span>
                   
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" id="TextInput" required placeholder="Name" name="mrng_time" value="{{$pooja_timing->mrng_time}}">
                                <label class="" for="TextInput">Time morning</label>
                            </span>
                        </div>

                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" id="TextInput" required placeholder="Name" name="evng_time" value="{{$pooja_timing->evng_time}}">
                                <label class="" for="TextInput">Time Evening</label>
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