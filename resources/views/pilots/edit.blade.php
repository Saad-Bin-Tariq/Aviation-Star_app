@extends('pilots.layout')
@section('content')

<div class="row">
    <h2>Edit Data</h2>
    <br>
    <a class="btn btn-primary" href="{{ route('pilots.index') }}">Back</a>
</div>

<form action="{{ route('pilots.update',$pilots->id) }}" method="POST">
@csrf
@method('PUT')

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" value="{{ $pilots->name }}" class="form-control" placeholder="Name">
        </div>
    </div>
     //ERROR MESSAGE WALA IS SKIPPED
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Rank:</strong>
            <input type="text" name="rank" value="{{ $pilots->rank }}" class="form-control" placeholder="Rank">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>

@endsection