@extends('layouts.master')
@section('title','Users')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            {{-- <td>
                                <a class="btn btn-success" href="/posts/{{$post->id}}">View</a>
                                <a class="btn btn-info" href="/edit-post/{{$post->id}}">Edit</a>
                                <a class="btn btn-danger" href="/delete-post/{{$post->id}}">Delete</a>
                            </td> --}}
                        </tr>
                        @endforeach
                    </tr>
                </tbody>
            </table>
            {{$users->links()}}
        </div>
    </div>
</div>
@endsection