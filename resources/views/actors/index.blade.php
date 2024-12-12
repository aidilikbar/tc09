@extends('layouts.app')

@section('title', 'Actors')

@section('content')
<div class="container">
    <h1>Actors</h1>
    <a href="{{ route('actors.create') }}" class="btn btn-primary mb-3">Add Actor</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Actor ID</th>
                <th>Role</th>
                <th>Address</th>
                <th>Postal Code</th>
                <th>City</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Geolocation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($actors as $actor)
            <tr>
                <td>{{ $actor->actor_id }}</td>
                <td>{{ $actor->actorid }}</td>
                <td>{{ $actor->roles }}</td>
                <td>{{ $actor->address }}</td>
                <td>{{ $actor->postal_code }}</td>
                <td>{{ $actor->city }}</td>
                <td>{{ $actor->latitude }}</td>
                <td>{{ $actor->longitude }}</td>
                <td>{{ $actor->geolocation }}</td>
                <td>
                    <a href="{{ route('actors.edit', $actor->actor_id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ route('actors.show', $actor->actor_id) }}" class="btn btn-info btn-sm">View</a>
                    <form action="{{ route('actors.destroy', $actor->actor_id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection