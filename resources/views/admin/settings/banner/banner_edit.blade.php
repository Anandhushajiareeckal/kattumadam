@extends('layouts.admin')
@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">			
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body card-main-three">
                    <h5 class="m-4">Edit Temple </h5>
                    <form class="form-floating" action="{{ route('com_banner_save',['id'=>$banner_edit->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="mb-4">
                            <span class="form-floating">
                                <p>Image</p>
                                <img src="{{$banner_edit->image}}" alt="image" style="height: 4em"><br><br>
                                <input type="file" class="form-control" id="emailInput"  placeholder="password" name="image" value="{{$banner_edit->image}}">
                                <small class="">Max file size: 300KB</small>

                            </span>
                        </div>
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="text" class="form-control" id="TextInput" required placeholder="Name" name="heading" value="{{$banner_edit->heading}}">
                                <label class="" for="TextInput">Heading</label>
                            </span>
                        </div>
                       
                        

                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a href="/admin/banner" class="btn btn-outline-secondary">Cancel</a>

                        </div>
                      
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection