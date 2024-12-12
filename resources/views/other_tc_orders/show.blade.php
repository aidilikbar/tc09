@extends('layouts.app')

@section('title', 'Other TC Order Details')

@section('content')
<div class="container">
    <h1>Other TC Order Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $order->id }}</td>
        </tr>
        <tr>
            <th>Other TC Order ID</th>
            <td>{{ $order->othertcorderid }}</td>
        </tr>
        <tr>
            <th>Other TC ID</th>
            <td>{{ $order->other_tc_id }}</td>
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
            <th>Bid Fee</th>
            <td>{{ $order->bidfee }}</td>
        </tr>
        <tr>
            <th>Order Bid Response</th>
            <td>{{ $order->order_bid_response ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $order->other_tc_order_status }}</td>
        </tr>
    </table>
    <a href="{{ route('other-tc-orders.index') }}" class="btn btn-primary">
        <i class="fas fa-arrow-left"></i> Back
    </a>
</div>
@endsection