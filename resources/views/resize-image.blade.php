@extends('layouts.master')
@extends('layouts.navb')
@section('title','Resize-image')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    Resize Image Page
                </div>
                <div class="card-body">
                <form action="{{route('image.resizesubmit')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="file">Choose Image</label>
                            <input id="file" class="form-control" type="file" name="file">
                        </div>
                        <button type="submit" class="btn btn-success" >Resize</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection