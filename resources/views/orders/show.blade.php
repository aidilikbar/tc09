@extends('layouts.app')

@section('title', 'Order Details')

@section('content')
<div class="container">
    <h1>Order Details</h1>
    <table class="table table-bordered">
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
            <td>{{ $order->status }}</td>
        </tr>
        <tr>
            <th>Order Fee</th>
            <td>{{ $order->fee }}</td>
        </tr>
    </table>
    <h3>Products</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>SKU</th>
                <th>Product Name</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->products as $product)
                <tr>
                    <td>{{ $product->sku }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->pivot->quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('orders.index') }}" class="btn btn-primary">
        <i class="fas fa-arrow-left"></i> Back
    </a>
</div>
@endsection