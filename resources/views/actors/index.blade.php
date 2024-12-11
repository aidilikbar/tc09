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
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($actors as $actor)
            <tr>
                <td>{{ $actor->id }}</td>
                <td>{{ $actor->actorid }}</td>
                <td>{{ $actor->roles }}</td>
                <td>
                    <a href="{{ route('actors.edit', $actor->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ route('actors.show', $actor->id) }}" class="btn btn-info btn-sm">View</a>
                    <form action="{{ route('actors.destroy', $actor->id) }}" method="POST" style="display:inline;">
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