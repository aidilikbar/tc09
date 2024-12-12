@extends('layouts.app')

@section('title', 'Order Details')

@section('content')
<div class="container">
    <h1 class="mb-4">Order Details</h1>
    <h3>Order Information</h3>
    <table class="table table-bordered mb-4">
        <tr>
            <th>ID</th>
            <td>{{ $order->order_id }}</td>
        </tr>
        <tr>
            <th>Order ID</th>
            <td>{{ $order->orderid }}</td>
        </tr>
        <tr>
            <th>Customer</th>
            <td>{{ $order->customer }}</td>
        </tr>
        <tr>
            <th>DC ID</th>
            <td>{{ $order->dcid }}</td>
        </tr>
        <tr>
            <th>SP ID</th>
            <td>{{ $order->spid }}</td>
        </tr>
        <tr>
            <th>TC ID</th>
            <td>{{ $order->tcid }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $order->order_status }}</td>
        </tr>
        <tr>
            <th>Order Fee</th>
            <td>{{ $order->order_fee }}</td>
        </tr>
    </table>
    <h3>Product Information</h3>
    <table class="table table-bordered">
        @if ($order->product)
        <tr>
            <th>SKU</th>
            <td>{{ $order->product->sku }}</td>
        </tr>
        <tr>
            <th>Product Name</th>
            <td>{{ $order->product->product_name }}</td>
        </tr>
        <tr>
            <th>Quantity</th>
            <td>{{ $order->quantity }}</td>
        </tr>
        @else
        <tr>
            <td colspan="2">No product associated with this order.</td>
        </tr>
        @endif
    </table>
    <a href="{{ route('orders.index') }}" class="btn btn-primary mt-3">
        <i class="fas fa-arrow-left"></i> Back
    </a>
</div>
@endsection