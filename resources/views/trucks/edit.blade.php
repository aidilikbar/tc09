@extends('layouts.app')

@section('title', 'Edit Truck')

@section('content')
<div class="container">
    <h1>Edit Truck</h1>
    <form action="{{ route('trucks.update', $truck->truck_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="license_plate" class="form-label">License Plate</label>
            <input type="text" class="form-control" id="license_plate" name="license_plate" value="{{ $truck->license_plate }}" required>
        </div>
        <div class="mb-3">
            <label for="height" class="form-label">Height</label>
            <input type="number" class="form-control" id="height" name="height" value="{{ $truck->height }}" required>
        </div>
        <div class="mb-3">
            <label for="width" class="form-label">Width</label>
            <input type="number" step="0.01" class="form-control" id="width" name="width" value="{{ $truck->width }}" required>
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">Weight</label>
            <input type="number" class="form-control" id="weight" name="weight" value="{{ $truck->weight }}" required>
        </div>
        <div class="mb-3">
            <label for="capacity" class="form-label">Capacity</label>
            <input type="number" class="form-control" id="capacity" name="capacity" value="{{ $truck->capacity }}" required>
        </div>
        <div class="mb-3">
            <label for="truck_status" class="form-label">Status</label>
            <select class="form-select" id="truck_status" name="truck_status" required>
                <option value="available" {{ $truck->truck_status == 'available' ? 'selected' : '' }}>Available</option>
                <option value="assigned" {{ $truck->truck_status == 'assigned' ? 'selected' : '' }}>Assigned</option>
                <option value="on_route" {{ $truck->truck_status == 'on_route' ? 'selected' : '' }}>On Route</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">
            <i class="fas fa-save"></i> Update
        </button>
        <a href="{{ route('trucks.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </form>
</div>
@endsection