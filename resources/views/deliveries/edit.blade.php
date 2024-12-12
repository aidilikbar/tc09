@extends('layouts.app')

@section('title', 'Edit Delivery')

@section('content')
<div class="container">
    <h1>Edit Delivery</h1>
    <form action="{{ route('deliveries.update', $delivery->delivery_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="tcid" class="form-label">TC ID</label>
            <input type="text" class="form-control" id="tcid" name="tcid" value="{{ $delivery->tcid }}" required>
        </div>
        <div class="mb-3">
            <label for="dcid" class="form-label">DC ID</label>
            <input type="text" class="form-control" id="dcid" name="dcid" value="{{ $delivery->dcid }}" required>
        </div>
        <div class="mb-3">
            <label for="spid" class="form-label">SP ID</label>
            <input type="text" class="form-control" id="spid" name="spid" value="{{ $delivery->spid }}" required>
        </div>
        <div class="mb-3">
            <label for="pallet" class="form-label">Pallet</label>
            <input type="number" class="form-control" id="pallet" name="pallet" value="{{ $delivery->pallet }}" required>
        </div>
        <div class="mb-3">
            <label for="fee" class="form-label">Fee</label>
            <input type="number" step="0.01" class="form-control" id="fee" name="fee" value="{{ $delivery->fee }}" required>
        </div>
        <div class="mb-3">
            <label for="delivery_status" class="form-label">Status</label>
            <select class="form-select" id="delivery_status" name="delivery_status" required>
                <option value="pallete_calculated" {{ $delivery->delivery_status == 'pallete_calculated' ? 'selected' : '' }}>Pallet Calculated</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="license_plate" class="form-label">License Plate</label>
            <input type="text" class="form-control" id="license_plate" name="license_plate" value="{{ $delivery->license_plate }}">
        </div>
        <button type="submit" class="btn btn-success">
            <i class="fas fa-save"></i> Update
        </button>
        <a href="{{ route('deliveries.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </form>
</div>
@endsection