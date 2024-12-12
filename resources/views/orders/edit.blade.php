@extends('layouts.app')

@section('title', 'Edit Order')

@section('content')
<div class="container">
    <h1>Edit Order</h1>
    <form action="{{ route('orders.update', $order->order_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="orderid" class="form-label">Order ID</label>
            <input type="text" class="form-control" id="orderid" name="orderid" value="{{ $order->orderid }}" required>
        </div>
        <div class="mb-3">
            <label for="customer" class="form-label">Customer</label>
            <input type="text" class="form-control" id="customer" name="customer" value="{{ $order->customer }}" required>
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
            <label for="tcid" class="form-label">TC ID</label>
            <input type="text" class="form-control" id="tcid" name="tcid" value="{{ $order->tcid }}" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Order Status</label>
            <select class="form-select" id="status" name="status" required>
                <option value="new" {{ $order->status == 'new' ? 'selected' : '' }}>New</option>
                <option value="processed" {{ $order->status == 'processed' ? 'selected' : '' }}>Processed</option>
                <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="fee" class="form-label">Order Fee</label>
            <input type="number" step="0.01" class="form-control" id="fee" name="fee" value="{{ $order->fee }}" required>
        </div>
        <div class="mb-3">
            <label for="products" class="form-label">Products</label>
            <div id="product-fields">
                @foreach ($products as $product)
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="products[]" value="{{ $product->id }}" id="product-{{ $product->id }}">
                        <label class="form-check-label" for="product-{{ $product->id }}">{{ $product->product_name }}</label>
                        <input type="number" class="form-control mt-2" name="quantities[]" placeholder="Quantity" min="1" style="width: 100px;">
                    </div>
                @endforeach
            </div>
        </div>
        <button type="submit" class="btn btn-success">
            <i class="fas fa-save"></i> Update
        </button>
        <a href="{{ route('orders.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </form>
</div>
@endsection