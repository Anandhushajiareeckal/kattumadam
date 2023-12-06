@extends('layouts.admin')

@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">			
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body card-main-three">
                    <h5 class="m-4">Add Event </h5>
                    <form class="form-floating" action="{{ route('event_update',['id'=>$event->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <span class="form-floating">
                                <input type="text" value="{{$event->heading}} " class="form-control" id="TextInput" placeholder="Name" name="heading" required>
                                <label class="" for="TextInput">Heading</label>
                            </span>
                        </div>
                      
                        <div class="mb-4">
                            <span class="form-floating">
                                
                                <textarea class="form-control" id="TextInput" placeholder="Name" name="description" required cols="30" rows="50" style="height: 200px;"> {{$event->description}}</textarea>
                                <label class="" for="TextInput">Description</label>
                            </span>
                        </div>
                        <div class="mb-4">
                            <span class="form-floating">
                                <img src="{{$event->image}}" alt=""  style="width: 150px;">
                                 <input type="file" class="form-control" id="imageInput" name="image" accept="image/*"   >
                                 <small class="text-muted">Max file size: 300KB</small>
                            </span>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                    </div>
                                    <div class="card-body">
                                        <label class="" for="TextArea">Content</label><br>
                                        <textarea name="content"  id="summernote"  value="" >{{$event->content}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a href="{{ route('banner_list') }}" class="btn btn-outline-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection