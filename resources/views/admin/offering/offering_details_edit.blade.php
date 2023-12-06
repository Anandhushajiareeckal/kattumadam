@extends('layouts.admin')
@section('body')
<div class="ps-md-4 pe-md-3 px-2 py-3 page-body">			
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body card-main-three">
                    <h5 class="m-4"> Edit </h5>
                    <form class="form-floating" action="{{ route('offering_detail_update',['id' => $offering_details->id,'offer'=>$offr]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="mb-4">
                            <span class="form-floating">
                                <input value="{{$offering_details->details}}" type="text"  class="form-control" id="TextInput" placeholder="Name" name="offering" required>
                                <label class="" for="TextInput">Heading</label>
                            </span>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary" onclick="goBack()">Add</button>
                            <a href="{{ route('offering_update',['id' => $offering_details->id, 'offer'=>$offr]) }}" class="btn btn-outline-secondary">Cancel</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  function goBack() {
        window.history.back();
    }
</script>
@endsection