@extends('layouts.app')

@section('title', 'Deliveries')

@section('content')
<div class="container">
    <h1>Deliveries</h1>
    <a href="{{ route('deliveries.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Add Delivery
    </a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>TC ID</th>
                <th>DC ID</th>
                <th>SP ID</th>
                <th>Pallet</th>
                <th>Fee</th>
                <th>Status</th>
                <th>License Plate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deliveries as $delivery)
            <tr>
                <td>{{ $delivery->delivery_id }}</td>
                <td>{{ $delivery->tcid }}</td>
                <td>{{ $delivery->dcid }}</td>
                <td>{{ $delivery->spid }}</td>
                <td>{{ $delivery->pallet }}</td>
                <td>{{ $delivery->fee }}</td>
                <td>{{ $delivery->delivery_status }}</td>
                <td>{{ $delivery->license_plate }}</td>
                <td>
                    <a href="{{ route('deliveries.edit', $delivery->delivery_id) }}" class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <a href="{{ route('deliveries.show', $delivery->delivery_id) }}" class="btn btn-info btn-sm">
                        <i class="fas fa-eye"></i> View
                    </a>
                    <form action="{{ route('deliveries.destroy', $delivery->delivery_id) }}" method="POST" style="display:inline;">
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