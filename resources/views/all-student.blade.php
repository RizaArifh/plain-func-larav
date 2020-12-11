@extends('layouts.master')
@extends('layouts.navb')
@section('title','All Student')
@section('headcontent')
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                All Student 
                </div>
                <div class="card-body">
                    @if(Session::has('student_deleted'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('student_deleted')}}
                    </div>
                    @endif
                <a href="{{route('student.addform')}}" class="btn btn-success" >add Student</a>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Profile Picture</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                            <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->phone}}</td>
                            <td><img src="{{asset('images')}}/{{$student->profileimage}}" style="max-width: 60px" alt=""> </td>
                            <td>
                            <a href="{{route('student.edit',['id'=>$student->id])}}" class="btn btn-info">Edit</a>
                            <a href="{{route('student.delete',['id'=>$student->id])}}" class="btn btn-danger">Delete</a>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('add-cdn')

<script>

</script>
@endsection