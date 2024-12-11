@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Actor</h1>
    <form action="{{ route('actors.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="actorid" class="form-label">Actor ID</label>
            <input type="text" class="form-control" id="actorid" name="actorid" required>
        </div>
        <div class="mb-3">
            <label for="roles" class="form-label">Role</label>
            <select class="form-select" id="roles" name="roles" required>
                <option value="tc">TC</option>
                <option value="dc">DC</option>
                <option value="ct">CT</option>
                <option value="sp">SP</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('actors.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection