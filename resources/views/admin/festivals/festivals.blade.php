@extends('layouts.admin')
@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">			
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body card-main-three">
                    <h5 class="m-4">Edit Temple </h5>
                    <form class="form-floating" action="{{ route('festival_update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                    </div>
                                    <div class="card-body">
                                        <label class="form-label" for="TextArea">Content</label><br>
                                        <textarea name="content" required id="summernote" >{!!$festival->content!!}</textarea>
                                    </div>
                                </div>
                            </div>
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