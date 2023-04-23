@extends('pilots.layout')

@section('content')
<div class="row">
    <div class="pull-left">
        <h2>Pilot Registration</h2>
        <p>Enter Pilot Details</p>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('pilots.index') }}">Back</a>
    </div>
</div>

{{-- @if ($error->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong>There was a problem in input. <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                
            @endforeach
        </ul>
    </div>
    
@endif --}}

<form action="{{ route('pilots.store') }}" method="POST">
    @csrf

    <div class="row">

        <div class="form-group">
            <strong>Pilot Name:</strong>
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>

        <div class="form-group">
            <strong>Pilot Rank:</strong>
            <input type="text" name="rank" class="form-control" placeholder="Rank">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </div>
</form>
@endsection