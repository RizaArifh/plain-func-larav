@extends('layouts.master')
@extends('layouts.navb')
@section('title','Import FOrm')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    Import
                </div>
                <div class="card-body">
                <form method="POST" action="{{route('employee.import')}}" enctype="multipart/form-data" >
                        @csrf
                            <div class="form-group">
                                <label for="file">Choose CSV</label>
                                <input id="file" class="form-control" type="file" name="file">
                            </div>
                            <button type="submit" class="btn btn-primary">Import</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection