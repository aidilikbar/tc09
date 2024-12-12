@extends('layouts.app')

@section('title', 'Edit Actor')

@section('content')
<div class="container">
    <h1>Edit Actor</h1>
    <form action="{{ route('actors.update', $actor->actor_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="actorid" class="form-label">Actor ID</label>
            <input type="text" class="form-control" id="actorid" name="actorid" value="{{ $actor->actorid }}" required>
        </div>
        <div class="mb-3">
            <label for="roles" class="form-label">Role</label>
            <select class="form-select" id="roles" name="roles" required>
                <option value="tc" {{ $actor->roles == 'tc' ? 'selected' : '' }}>TC</option>
                <option value="dc" {{ $actor->roles == 'dc' ? 'selected' : '' }}>DC</option>
                <option value="ct" {{ $actor->roles == 'ct' ? 'selected' : '' }}>CT</option>
                <option value="sp" {{ $actor->roles == 'sp' ? 'selected' : '' }}>SP</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $actor->address }}" required>
        </div>
        <div class="mb-3">
            <label for="postal_code" class="form-label">Postal Code</label>
            <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ $actor->postal_code }}">
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" value="{{ $actor->city }}" required>
        </div>
        <div class="mb-3">
            <label for="latitude" class="form-label">Latitude</label>
            <input type="text" class="form-control" id="latitude" name="latitude" value="{{ $actor->latitude }}">
        </div>
        <div class="mb-3">
            <label for="longitude" class="form-label">Longitude</label>
            <input type="text" class="form-control" id="longitude" name="longitude" value="{{ $actor->longitude }}">
        </div>
        <div class="mb-3">
            <label for="geolocation" class="form-label">Geolocation</label>
            <input type="text" class="form-control" id="geolocation" name="geolocation" value="{{ $actor->geolocation }}">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('actors.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection