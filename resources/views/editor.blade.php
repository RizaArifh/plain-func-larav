@extends('layouts.master')
@extends('layouts.navb')
@section('title','Import FOrm')
@section('headcontent')
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Editor TinyMCE
                </div>
                <div class="card-body">
                <form method="POST" action="">
                        @csrf
                            <div class="form-group">
                                
                                <textarea id="mytextarea" class="form-control" type="text" name="mytextarea"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('add-cdn')
<script src="https://cdn.tiny.cloud/1/vfvc8ulnup56qtmkxijnwwnhdpyp10sorxdsdmy4qwvh34zj/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
        selector:'#mytextarea'
    })
</script>
@endsection