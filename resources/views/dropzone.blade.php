@extends('layouts.master')
@extends('layouts.navb')
@section('title','Dropzone')
@section('headcontent')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" integrity="sha512-3g+prZHHfmnvE1HBLwUnVuunaPOob7dpksI7/v6UnF/rnKGwHf/GdEq9K7iEN7qTtW+S0iivTcGpeTBqqB04wA==" crossorigin="anonymous" />
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Dropzone File Upload
                </div>
                <div class="card-body">
                <form action="{{route('dropzone.uploadsubmit')}}" class="dropzone dz-clickable" method="POST" enctype="multipart/form-data" id="image-upload">
                    @csrf
                <div>
                    <h3 class="text-center">Upload Image By Click On Box</h3>
                </div>
                <div class="dz-default dz-message"><span>Drop File Here To Upload</span></div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('add-cdn')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js" integrity="sha512-9WciDs0XP20sojTJ9E7mChDXy6pcO0qHpwbEJID1YVavz2H6QBz5eLoDD8lseZOb2yGT8xDNIV7HIe1ZbuiDWg==" crossorigin="anonymous"></script>

@endsection


