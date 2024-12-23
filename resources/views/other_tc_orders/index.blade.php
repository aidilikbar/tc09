@extends('layouts.app')

@section('title', 'Other TC Orders')

@section('content')
<div class="container">
    <h1>Other TC Orders</h1>
    <a href="{{ route('other-tc-orders.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Add Other TC Order
    </a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Other TC Order ID</th>
                <th>Other TC ID</th>
                <th>DC ID</th>
                <th>SP ID</th>
                <th>Bid Fee</th>
                <th>Order Bid Response</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($otherTcOrders as $order)
            <tr>
                <td>{{ $order->other_tc_order_id }}</td>
                <td>{{ $order->othertcorderid }}</td>
                <td>{{ $order->other_tc_id }}</td>
                <td>{{ $order->dcid }}</td>
                <td>{{ $order->spid }}</td>
                <td>{{ $order->bidfee }}</td>
                <td>{{ $order->order_bid_response ? 'Yes' : 'No' }}</td>
                <td>{{ $order->other_tc_order_status }}</td>
                <td>
                    <a href="{{ route('other-tc-orders.edit', $order->other_tc_order_id) }}" class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <a href="{{ route('other-tc-orders.show', $order->other_tc_order_id) }}" class="btn btn-info btn-sm">
                        <i class="fas fa-eye"></i> View
                    </a>
                    <form action="{{ route('other-tc-orders.destroy', $order->other_tc_order_id) }}" method="POST" style="display:inline;">
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