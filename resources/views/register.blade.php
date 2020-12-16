@extends('layouts.master')
@include('layouts.navb')
@section('title','Register')
@section('headcontent')
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous"></script>

<style>
.parsley-error-list li{
    list-style: none;
    color: red;
}

</style>
@endsection
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                Register
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('auth.registersubmit')}}" id="registerForm">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" class="form-control" type="text" name="name" required data-parsley-pattern="[a-zA-Z]+$" data-parsley-pattern-message="Masukan harus huruf alphabet"  data-parsley-trigger="keyup">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" class="form-control" type="text" name="email" data-parsley-type="email" data-parsley-type-message="Masukan dengan format email yang benar" required data-parsley-trigger="keyup">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" class="form-control" type="text" name="password" data-parsley-length="[6,12]" data-parsley-length-message="Min Panjang 6, Max 12 karakter" required data-parsley-trigger="keyup">
                        </div>
                        <div class="form-group">
                            <label for="cpassword">Confirm Password</label>
                            <input id="cpassword" class="form-control" type="text" name="cpassword" data-parsley-equalto="password" data-parsley-equalto-message="Harus sama dengan isi di password" required data-parsley-trigger="keyup">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input id="phone" class="form-control" type="text" name="phone"  data-parsley-length="[10, 13]" data-parsley-length-message="nomor min 10, max 13 karakter" data-parsley-type="digits" data-parsley-type-message="Masukan harus berupa angka" data-parsley-trigger="keyup" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('modal')

@section('add-cdn')

<script>
$(function(){
    $("#registerForm").parsley();
})
</script>
@endsection