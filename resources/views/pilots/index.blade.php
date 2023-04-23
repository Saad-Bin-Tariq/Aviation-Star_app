@extends('pilots.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Pilot's Data</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('pilots.create') }}">Register New Pilots</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-succes">
        <p>{{ $message }}</p>
    </div>
    
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Rank</th>
        <th>Pilot Name</th>
    </tr>
    @foreach ($pilot as $pilots)
    <tr>
        <td>{{ $pilots->id }}</td>
        <td>{{ $pilots->rank }}</td>
        <td>{{ $pilots->name }}</td>
        <td>
            <form action="{{ route('pilots.destroy',$pilots->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('pilots.show',$pilots->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('pilots.edit', $pilots->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
        
    @endforeach
</table>

@endsection