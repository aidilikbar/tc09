@extends('layouts.app')

@section('title', 'Add Delivery')

@section('content')
<div class="container">
    <h1>Add Delivery</h1>
    <form action="{{ route('deliveries.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="tcid" class="form-label">TC ID</label>
            <input type="text" class="form-control" id="tcid" name="tcid" required>
        </div>
        <div class="mb-3">
            <label for="dcid" class="form-label">DC ID</label>
            <input type="text" class="form-control" id="dcid" name="dcid" required>
        </div>
        <div class="mb-3">
            <label for="spid" class="form-label">SP ID</label>
            <input type="text" class="form-control" id="spid" name="spid" required>
        </div>
        <div class="mb-3">
            <label for="pallet" class="form-label">Pallet</label>
            <input type="number" class="form-control" id="pallet" name="pallet" required>
        </div>
        <div class="mb-3">
            <label for="fee" class="form-label">Fee</label>
            <input type="number" step="0.01" class="form-control" id="fee" name="fee" required>
        </div>
        <div class="mb-3">
            <label for="delivery_status" class="form-label">Status</label>
            <select class="form-select" id="delivery_status" name="delivery_status" required>
                <option value="pallete_calculated">Pallet Calculated</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="license_plate" class="form-label">License Plate</label>
            <input type="text" class="form-control" id="license_plate" name="license_plate">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('deliveries.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection