@extends('layouts.app')

@section('title', 'Add Actor')

@section('content')
<div class="container">
    <h1>Add Actor</h1>
    <form action="{{ route('actors.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="actorid" class="form-label">Actor ID</label>
            <input type="text" class="form-control" id="actorid" name="actorid" required>
        </div>
        <div class="mb-3">
            <label for="roles" class="form-label">Role</label>
            <select class="form-select" id="roles" name="roles" required>
                <option value="tc">TC</option>
                <option value="dc">DC</option>
                <option value="ct">CT</option>
                <option value="sp">SP</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="mb-3">
            <label for="postal_code" class="form-label">Postal Code</label>
            <input type="text" class="form-control" id="postal_code" name="postal_code">
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" required>
        </div>
        <div class="mb-3">
            <label for="latitude" class="form-label">Latitude</label>
            <input type="text" class="form-control" id="latitude" name="latitude">
        </div>
        <div class="mb-3">
            <label for="longitude" class="form-label">Longitude</label>
            <input type="text" class="form-control" id="longitude" name="longitude">
        </div>
        <div class="mb-3">
            <label for="geolocation" class="form-label">Geolocation</label>
            <input type="text" class="form-control" id="geolocation" name="geolocation">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('actors.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection