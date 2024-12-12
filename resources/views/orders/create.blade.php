@extends('layouts.app')

@section('title', 'Add Order')

@section('content')
<div class="container">
    <h1>Add Order</h1>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="orderid" class="form-label">Order ID</label>
            <input type="text" class="form-control" id="orderid" name="orderid" required>
        </div>
        <div class="mb-3">
            <label for="customer" class="form-label">Customer</label>
            <input type="text" class="form-control" id="customer" name="customer" required>
        </div>
        <div class="mb-3">
            <label for="dcid" class="form-label">DC ID</label>
            <input type="text" class="form-control" id="dcid" name="dcid">
        </div>
        <div class="mb-3">
            <label for="spid" class="form-label">SP ID</label>
            <input type="text" class="form-control" id="spid" name="spid">
        </div>
        <div class="mb-3">
            <label for="tcid" class="form-label">TC ID</label>
            <input type="text" class="form-control" id="tcid" name="tcid">
        </div>
        <div class="mb-3">
            <label for="order_status" class="form-label">Order Status</label>
            <select class="form-select" id="order_status" name="order_status" required>
                <option value="open">Open</option>
                <option value="open_for_bidding">Open for Bidding</option>
                <option value="pending">Pending</option>
                <option value="confirmed">Confirmed</option>
                <option value="assigned">Assigned</option>
                <option value="assigned_to_other_tc">Assigned to Other TC</option>
                <option value="completed">Completed</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="order_fee" class="form-label">Order Fee</label>
            <input type="number" step="0.01" class="form-control" id="order_fee" name="order_fee">
        </div>
        <button type="submit" class="btn btn-success">
            <i class="fas fa-save"></i> Save
        </button>
        <a href="{{ route('orders.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </form>
</div>
@endsection