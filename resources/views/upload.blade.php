@extends('layouts.master')
@section('title','Upload File')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    File Upload
                </div>
                <div class="card-body">
                <form action="{{route('upload.uploadfile')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="file">Choose File</label>
                        <input id="file" class="form-control" type="file" name="file">
                    </div>
                    <button type="submit" class="btn btn-success">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection