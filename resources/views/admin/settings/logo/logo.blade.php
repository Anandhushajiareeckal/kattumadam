@extends('layouts.admin')

@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">			
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body card-main-three">
                    <h5 class="m-4">Edit icons</h5>
                    <form class="form-floating" action="{{route('logo_update')}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-4">
                            <span class="form-floating">
                                <h5 class="m-2">Fav icon</h5>
                                <img src="{{$logo->fav}}" alt="image" style="height: 4em"><br><br>
                                <input type="file" class="form-control" id="emailInput"  placeholder="password" name="fav" value="{{$logo->fav}}">
                                <small class="text-muted">Max file size: 300KB</small>

                            </span>
                        </div>
                        <div class="mb-4">
                            <span class="form-floating">
                                <h5 class="m-2">Logo </h5>
                                <img src="{{$logo->logo}}" alt="image" style="height: 4em"><br><br>
                                <input type="file" class="form-control" id="emailInput"  placeholder="password" name="logo" value="{{$logo->logo}}">
                                <small class="text-muted">Max file size: 300KB</small>

                            </span>
                        </div>
                      
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a href="/admin/logo" class="btn btn-outline-secondary">Cancel</a>

                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

