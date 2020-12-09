@extends('layouts.master')
@extends('layouts.navb')
@section('title','Upload File')
@section('content')
    
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            All Post
                            <a class="btn btn-success" href="{{route('post.add')}}">Add Post</a>
                            
                        </div>
                        <div class="card-body">

                        @if(Session::has('post_deleted'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('post_deleted')}}
                            </div>
                            @endif
                            @if(Session::has('post_created'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('post_created')}}
                            </div>
                            @endif
                            @if(Session::has('comment_created'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('comment_created')}}
                            </div>
                            @endif

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Post id</th>
                                        <th>Post Title</th>
                                        <th>Post Body</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($posts as $post)
                                        <tr>
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->body}}</td>
                                            <td>
                                                <a class="btn btn-success" href="/posts/{{$post->id}}">Detail</a>
                                                <a class="btn btn-info" href="/edit-post/{{$post->id}}">Edit</a>
                                                <a class="btn btn-danger" href="/delete-post/{{$post->id}}">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection