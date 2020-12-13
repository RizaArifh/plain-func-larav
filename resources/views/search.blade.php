@extends('layouts.master')
@extends('layouts.navb')
@section('title','search')
@section('headcontent')
@endsection
@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    search product
                </div>
                <div class="card-body pt-3 pb-4">
                    <form action="">
                        <div class="form-group">
                            <input id="search" class="form-control typeahead" type="text" name="search"
                                placeholder="Search . . .">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('add-cdn')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"
    integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w=="
    crossorigin="anonymous"></script>
    
<script>
var path="{{route('product.autocomplete')}}";
$('input.typeahead').typeahead({
    source:function(terms,process){
        return $.get(path,{terms:terms},function(data){
            return process(data);
        })
    }
})
</script>
@endsection
