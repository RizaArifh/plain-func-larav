@extends('layouts.master')
@extends('layouts.navb')
@section('title','Dropzone')
@section('headcontent')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" integrity="sha512-3g+prZHHfmnvE1HBLwUnVuunaPOob7dpksI7/v6UnF/rnKGwHf/GdEq9K7iEN7qTtW+S0iivTcGpeTBqqB04wA==" crossorigin="anonymous" />
<style>
    img{
        background-color: grey;
        height: 250px;
        width: 100%;
        border: 1px solid grey;
        margin-top: 20px;
        box-shadow:0 8px 6px -6px black;


    }
</style>

@endsection
@section('content')
<div class="container">
    <div class="row">
            @for($i=1;$i<16;$i++)
            <div class="col-md-6">

    <img data-original="http://127.0.0.1:8000/images/d.png" src="" alt="">
</div>
            @endfor
         
    </div>
</div>

@endsection
@section('add-cdn')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('img').lazyload();
    })
</script>
@endsection


