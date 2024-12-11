@extends('layouts.app')

@section('title', 'Truck Details')

@section('content')
<div class="container">
    <h1>Truck Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $truck->id }}</td>
        </tr>
        <tr>
            <th>License Plate</th>
            <td>{{ $truck->license_plate }}</td>
        </tr>
        <tr>
            <th>Height</th>
            <td>{{ $truck->height }}</td>
        </tr>
        <tr>
            <th>Width</th>
            <td>{{ $truck->width }}</td>
        </tr>
        <tr>
            <th>Weight</th>
            <td>{{ $truck->weight }}</td>
        </tr>
        <tr>
            <th>Capacity</th>
            <td>{{ $truck->capacity }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $truck->truck_status }}</td>
        </tr>
    </table>
    <a href="{{ route('trucks.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection