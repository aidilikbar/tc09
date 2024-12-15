@extends('layouts.app')

@section('title', 'Calculate Distance')

@section('content')
<div class="container">
    <h1>Calculate Distance</h1>
    <form action="{{ url('/calculate-distance') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="origins" class="form-label">Origin</label>
            <select class="form-select" id="origins" name="origins" required>
                <option value="" disabled {{ old('origins') ? '' : 'selected' }}>Select Origin</option>
                @foreach ($actors as $actor)
                    <option value="{{ $actor->geolocation }}" {{ old('origins') == $actor->geolocation ? 'selected' : '' }}>
                        {{ $actor->actorid }} - {{ $actor->address }}, {{ $actor->city }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="destinations" class="form-label">Destination</label>
            <select class="form-select" id="destinations" name="destinations" required>
                <option value="" disabled {{ old('destinations') ? '' : 'selected' }}>Select Destination</option>
                @foreach ($actors as $actor)
                    <option value="{{ $actor->geolocation }}" {{ old('destinations') == $actor->geolocation ? 'selected' : '' }}>
                        {{ $actor->actorid }} - {{ $actor->address }}, {{ $actor->city }}
                    </option>
                @endforeach
            </select>
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
            <p>{{ session('distance') ?? 'N/A' }}</p>
        </div>
        <div class="mb-3">
            <strong>Duration:</strong>
            <p>{{ session('duration') ?? 'N/A' }}</p>
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