@extends('layouts.app')

@section('title', 'Orders')

@section('content')
<div class="container">
    <h1>Orders</h1>
    <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Add Order
    </a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Order ID</th>
                <th>TC ID</th>
                <th>DC ID</th>
                <th>SP ID</th>
                <th>Pallet</th>
                <th>Fee</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->orderid }}</td>
                <td>{{ $order->tcid }}</td>
                <td>{{ $order->dcid }}</td>
                <td>{{ $order->spid }}</td>
                <td>{{ $order->pallet }}</td>
                <td>{{ $order->fee }}</td>
                <td>{{ $order->status }}</td>
                <td>
                    <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info btn-sm">
                        <i class="fas fa-eye"></i> View
                    </a>
                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
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