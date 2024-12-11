@extends('layouts.app')

@section('title', 'Edit Other TC Order')

@section('content')
<div class="container">
    <h1>Edit Other TC Order</h1>
    <form action="{{ route('other-tc-orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="othertcorderid" class="form-label">Other TC Order ID</label>
            <input type="text" class="form-control" id="othertcorderid" name="othertcorderid" value="{{ $order->othertcorderid }}" required>
        </div>
        <div class="mb-3">
            <label for="other_tc_id" class="form-label">Other TC ID</label>
            <input type="text" class="form-control" id="other_tc_id" name="other_tc_id" value="{{ $order->other_tc_id }}" required>
        </div>
        <div class="mb-3">
            <label for="dcid" class="form-label">DC ID</label>
            <input type="text" class="form-control" id="dcid" name="dcid" value="{{ $order->dcid }}" required>
        </div>
        <div class="mb-3">
            <label for="spid" class="form-label">SP ID</label>
            <input type="text" class="form-control" id="spid" name="spid" value="{{ $order->spid }}" required>
        </div>
        <div class="mb-3">
            <label for="bidfee" class="form-label">Bid Fee</label>
            <input type="number" step="0.01" class="form-control" id="bidfee" name="bidfee" value="{{ $order->bidfee }}" required>
        </div>
        <div class="mb-3">
            <label for="order_bid_response" class="form-label">Order Bid Response</label>
            <select class="form-select" id="order_bid_response" name="order_bid_response" required>
                <option value="1" {{ $order->order_bid_response ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$order->order_bid_response ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="other_tc_order_status" class="form-label">Status</label>
            <select class="form-select" id="other_tc_order_status" name="other_tc_order_status" required>
                <option value="new" {{ $order->other_tc_order_status == 'new' ? 'selected' : '' }}>New</option>
                <option value="bid_submitted" {{ $order->other_tc_order_status == 'bid_submitted' ? 'selected' : '' }}>Bid Submitted</option>
                <option value="accepted" {{ $order->other_tc_order_status == 'accepted' ? 'selected' : '' }}>Accepted</option>
                <option value="rejected" {{ $order->other_tc_order_status == 'rejected' ? 'selected' : '' }}>Rejected</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('other-tc-orders.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection