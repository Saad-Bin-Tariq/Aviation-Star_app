@extends('pilots.layout')

@section('content')

<div class="row">
    <h2>Show Data</h2>
    <br>
    <a class="btn btn-primary" href="{{ pilots.index }}">Back</a>
</div>

<div class="row">
    <strong>Pilot Name:</strong>
    {{ $pilots->name }}
    <br>
    <strong>Rank:</strong>
    {{ $pilots->rank }}
</div>
@endsection