@extends('layouts.app')

@section('title', 'Trucks')

@section('content')
<div class="container">
    <h1>Trucks</h1>
    <a href="{{ route('trucks.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Add Truck
    </a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>License Plate</th>
                <th>Height</th>
                <th>Width</th>
                <th>Weight</th>
                <th>Capacity</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trucks as $truck)
            <tr>
                <td>{{ $truck->truck_id }}</td>
                <td>{{ $truck->license_plate }}</td>
                <td>{{ $truck->height }}</td>
                <td>{{ $truck->width }}</td>
                <td>{{ $truck->weight }}</td>
                <td>{{ $truck->capacity }}</td>
                <td>{{ $truck->truck_status }}</td>
                <td>
                    <a href="{{ route('trucks.edit', $truck->truck_id) }}" class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <a href="{{ route('trucks.show', $truck->truck_id) }}" class="btn btn-info btn-sm">
                        <i class="fas fa-eye"></i> View
                    </a>
                    <form action="{{ route('trucks.destroy', $truck->truck_id) }}" method="POST" style="display:inline;">
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