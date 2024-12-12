@extends('layouts.app')

@section('title', 'Edit Order')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Order</h1>
    <form action="{{ route('orders.update', $order->order_id) }}" method="POST">
        @csrf
        @method('PUT')
        <h3>Order Information</h3>
        <table class="table table-bordered mb-4">
            <tr>
                <th>Order ID</th>
                <td><input type="text" name="orderid" class="form-control" value="{{ $order->orderid }}" required></td>
            </tr>
            <tr>
                <th>Customer</th>
                <td><input type="text" name="customer" value="Uniprocterlevergamble Ltd." class="form-control" readonly></td>
            </tr>
            <tr>
                <th>DC ID</th>
                <td>
                    <select name="dcid" class="form-control" required>
                        @foreach ($dcActors as $dc)
                            <option value="{{ $dc->actorid }}" {{ $order->dcid === $dc->actorid ? 'selected' : '' }}>
                                {{ $dc->actorid }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>SP ID</th>
                <td>
                    <select name="spid" class="form-control" required>
                        @foreach ($spActors as $sp)
                            <option value="{{ $sp->actorid }}" {{ $order->spid === $sp->actorid ? 'selected' : '' }}>
                                {{ $sp->actorid }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>TC ID</th>
                <td><input type="text" name="tcid" value="TC09" class="form-control" readonly></td>
            </tr>
            <tr>
                <th>Status</th>
                <td>
                    <select name="order_status" class="form-control" required>
                        <option value="open" {{ $order->order_status === 'open' ? 'selected' : '' }}>Open</option>
                        <option value="pending" {{ $order->order_status === 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="completed" {{ $order->order_status === 'completed' ? 'selected' : '' }}>Completed</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Order Fee</th>
                <td><input type="number" step="0.01" name="order_fee" class="form-control" value="{{ $order->order_fee }}"></td>
            </tr>
        </table>

        <h3>Product Information</h3>
        <table class="table table-bordered mb-4">
            <tr>
                <th>Product</th>
                <td>
                    <select name="sku" class="form-control" required>
                        @foreach ($products as $product)
                            <option value="{{ $product->sku }}" {{ $order->sku === $product->sku ? 'selected' : '' }}>
                                {{ $product->product_name }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td><input type="number" name="quantity" class="form-control" value="{{ $order->quantity }}" required></td>
            </tr>
        </table>

        <button type="submit" class="btn btn-success">
            <i class="fas fa-save"></i> Update
        </button>
        <a href="{{ route('orders.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </form>
</div>
@endsection