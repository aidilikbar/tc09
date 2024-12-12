@extends('layouts.app')

@section('title', 'Add Truck')

@section('content')
<div class="container">
    <h1>Add Truck</h1>
    <form action="{{ route('trucks.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="license_plate" class="form-label">License Plate</label>
            <input type="text" class="form-control" id="license_plate" name="license_plate" required>
        </div>
        <div class="mb-3">
            <label for="height" class="form-label">Height</label>
            <input type="number" class="form-control" id="height" name="height" required>
        </div>
        <div class="mb-3">
            <label for="width" class="form-label">Width</label>
            <input type="number" step="0.01" class="form-control" id="width" name="width" required>
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">Weight</label>
            <input type="number" class="form-control" id="weight" name="weight" required>
        </div>
        <div class="mb-3">
            <label for="capacity" class="form-label">Capacity</label>
            <input type="number" class="form-control" id="capacity" name="capacity" required>
        </div>
        <div class="mb-3">
            <label for="truck_status" class="form-label">Status</label>
            <select class="form-select" id="truck_status" name="truck_status" required>
                <option value="available">Available</option>
                <option value="assigned">Assigned</option>
                <option value="on_route">On Route</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">
            <i class="fas fa-save"></i> Save
        </button>
        <a href="{{ route('trucks.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </form>
</div>
@endsection