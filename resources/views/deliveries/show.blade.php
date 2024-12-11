@extends('layouts.app')

@section('title', 'Delivery Details')

@section('content')
<div class="container">
    <h1>Delivery Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $delivery->id }}</td>
        </tr>
        <tr>
            <th>TC ID</th>
            <td>{{ $delivery->tcid }}</td>
        </tr>
        <tr>
            <th>DC ID</th>
            <td>{{ $delivery->dcid }}</td>
        </tr>
        <tr>
            <th>SP ID</th>
            <td>{{ $delivery->spid }}</td>
        </tr>
        <tr>
            <th>Pallet</th>
            <td>{{ $delivery->pallet }}</td>
        </tr>
        <tr>
            <th>Fee</th>
            <td>{{ $delivery->fee }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $delivery->delivery_status }}</td>
        </tr>
        <tr>
            <th>License Plate</th>
            <td>{{ $delivery->license_plate }}</td>
        </tr>
    </table>
    <a href="{{ route('deliveries.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection