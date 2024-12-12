@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
<div class="container">
    <h1>Product Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $product->product_id }}</td>
        </tr>
        <tr>
            <th>SKU</th>
            <td>{{ $product->sku }}</td>
        </tr>
        <tr>
            <th>Product Name</th>
            <td>{{ $product->product_name }}</td>
        </tr>
    </table>
    <a href="{{ route('products.index') }}" class="btn btn-primary">
        <i class="fas fa-arrow-left"></i> Back
    </a>
</div>
@endsection