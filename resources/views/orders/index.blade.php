@extends('layouts.app')

@section('title', 'Orders')

@section('content')
<div class="container">
    <h1 class="mb-4">Orders</h1>
    <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Add Order
    </a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Primary ID</th>
                <th>Order ID</th>
                <th>Customer</th>
                <th>DC ID</th>
                <th>SP ID</th>
                <th>TC ID</th>
                <th>Status</th>
                <th>Fee</th>
                <th>SKU</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->order_id }}</td>
                    <td>{{ $order->orderid }}</td>
                    <td>{{ $order->customer }}</td>
                    <td>{{ $order->dcid }}</td>
                    <td>{{ $order->spid }}</td>
                    <td>{{ $order->tcid }}</td>
                    <td>{{ $order->order_status }}</td>
                    <td>{{ $order->order_fee }}</td>
                    <td>{{ $order->sku }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>
                        <a href="{{ route('orders.edit', $order->order_id) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="{{ route('orders.show', $order->order_id) }}" class="btn btn-info btn-sm">
                            <i class="fas fa-eye"></i> View
                        </a>
                        <form action="{{ route('orders.destroy', $order->order_id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection