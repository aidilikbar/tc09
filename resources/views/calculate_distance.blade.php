@extends('layouts.app')

@section('title', 'Calculate Distance')

@section('content')
<div class="container">
    <h1>Calculate Distance</h1>
    <form action="{{ url('/calculate-distance') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="origins" class="form-label">Origin Coordinates</label>
            <input type="text" class="form-control" id="origins" name="origins" placeholder="e.g., 52.2545121,6.7766951" required>
        </div>
        <div class="mb-3">
            <label for="destinations" class="form-label">Destination Coordinates</label>
            <input type="text" class="form-control" id="destinations" name="destinations" placeholder="e.g., 52.3546102,6.6660272" required>
        </div>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-search-location"></i> Calculate
        </button>
    </form>

    @if (session('result'))
    <div class="mt-4">
        <h3>Calculation Result</h3>
        <div class="mb-3">
            <strong>Distance:</strong>
            <p>{{ session('result')['distance'] ?? 'N/A' }} meters</p>
        </div>
        <div class="mb-3">
            <strong>Full JSON Response:</strong>
            <pre style="background: #f8f9fa; padding: 10px; border: 1px solid #ddd;">
{{ json_encode(session('result')['full_json'], JSON_PRETTY_PRINT) }}
            </pre>
        </div>
    </div>
    @endif
</div>
@endsection