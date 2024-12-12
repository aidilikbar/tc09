@extends('layouts.app')

@section('title', 'Add Other TC Order')

@section('content')
<div class="container">
    <h1>Add Other TC Order</h1>
    <form action="{{ route('other-tc-orders.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="othertcorderid" class="form-label">Other TC Order ID</label>
            <input type="text" class="form-control" id="othertcorderid" name="othertcorderid" required>
        </div>
        <div class="mb-3">
            <label for="other_tc_id" class="form-label">Other TC ID</label>
            <input type="text" class="form-control" id="other_tc_id" name="other_tc_id" required>
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
            <label for="bidfee" class="form-label">Bid Fee</label>
            <input type="number" step="0.01" class="form-control" id="bidfee" name="bidfee" required>
        </div>
        <div class="mb-3">
            <label for="order_bid_response" class="form-label">Order Bid Response</label>
            <select class="form-select" id="order_bid_response" name="order_bid_response" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="other_tc_order_status" class="form-label">Status</label>
            <select class="form-select" id="other_tc_order_status" name="other_tc_order_status" required>
                <option value="new">New</option>
                <option value="bid_submitted">Bid Submitted</option>
                <option value="accepted">Accepted</option>
                <option value="rejected">Rejected</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">
            <i class="fas fa-save"></i> Save
        </button>
        <a href="{{ route('other-tc-orders.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </form>
</div>
@endsection