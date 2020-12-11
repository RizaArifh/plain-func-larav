@extends('layouts.master')
@extends('layouts.navb')
@section('title','Add Student')
@section('headcontent')
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    Add Student
                </div>
                <div class="card-body">
                    
                    @if(Session::has('student_added'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('student_added')}}
                    </div>
                    @endif
                <form method="POST" action="{{route('student.store')}}" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input id="email" class="form-control" type="text" name="email">
                            </div>
                            <div class="form-group">
                                <label for="phone">phone</label>
                                <input id="phone" class="form-control" type="text" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="file">profileimage</label>
                                <input id="file" class="form-control" type="file" name="file" onchange="previewFile(this)">
                                <img  id="previewImg" src="" alt="" style="max-width: 130px;margin-top:20px;" >
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('add-cdn')

<script>
 function previewFile(input){
     var file= $("input[type=file]").get(0).files[0];
     if(file){
         var reader = new FileReader();
         reader.onload=function(){
             $('#previewImg').attr("src",reader.result);
         }
         reader.readAsDataURL(file);
     }
 }
</script>
@endsection