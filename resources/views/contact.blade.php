@extends('layouts.master')
@section('title','Contact Us')
@extends('layouts.navb')
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    Contact Us
                </div>
                <div class="card-body">
                    @if(Session::has('message_sent'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('message_sent')}}
                    </div>
                    @endif
                <form action="{{route('contact.sendemail')}}" method="POST" enctype="multipart/form-data">
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
                            <label for="msg">Message</label>
                            <textarea id="msg" class="form-control" name="msg" cols="20" rows="3"></textarea> 
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
