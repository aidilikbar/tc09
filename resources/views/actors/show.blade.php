@extends('layouts.app')

@section('title', 'View Actor')

@section('content')
<div class="container">
    <h1>Actor Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $actor->actor_id }}</td>
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
            <th>Postal Code</th>
            <td>{{ $actor->postal_code }}</td>
        </tr>
        <tr>
            <th>City</th>
            <td>{{ $actor->city }}</td>
        </tr>
        <tr>
            <th>Latitude</th>
            <td>{{ $actor->latitude }}</td>
        </tr>
        <tr>
            <th>Longitude</th>
            <td>{{ $actor->longitude }}</td>
        </tr>
        <tr>
            <th>Geolocation</th>
            <td>{{ $actor->geolocation }}</td>
        </tr>
    </table>
    <a href="{{ route('actors.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Back
    </a>
</div>
@endsection