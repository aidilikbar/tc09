@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Actor Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $actor->id }}</td>
        </tr>
        <tr>
            <th>Actor ID</th>
            <td>{{ $actor->actorid }}</td>
        </tr>
        <tr>
            <th>Role</th>
            <td>{{ $actor->roles }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{ $actor->address }}</td>
        </tr>
        <tr>
            <th>City</th>
            <td>{{ $actor->city }}</td>
        </tr>
        <!-- Add other fields as needed -->
    </table>
    <a href="{{ route('actors.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection