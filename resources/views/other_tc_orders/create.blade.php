@extends('layouts.app')

@section('title', 'Add Other TC Order')

@section('content')
<div class="container">
    <h1 class="mb-4">Add Other TC Order</h1>
    <form action="{{ route('other-tc-orders.store') }}" method="POST">
        @csrf
        <h3>Order Information</h3>
        <table class="table table-bordered mb-4">
            <tr>
                <th>Other TC Order ID</th>
                <td>
                    <input type="text" class="form-control" name="other_tc_order_id" value="{{ old('other_tc_order_id') }}" required>
                </td>
            </tr>
            <tr>
                <th>Other TC</th>
                <td>
                    <select class="form-select" name="other_tc_id" required>
                        <option value="" disabled selected>Select Other TC</option>
                        @foreach ($tcActors as $tc)
                            <option value="{{ $tc->actorid }}" {{ old('other_tc_id') == $tc->actorid ? 'selected' : '' }}>
                                {{ $tc->actorid }} - {{ $tc->address }}, {{ $tc->city }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>DC ID</th>
                <td>
                    <select class="form-select" name="dcid" required>
                        <option value="" disabled selected>Select DC</option>
                        @foreach ($dcActors as $dc)
                            <option value="{{ $dc->actorid }}" {{ old('dcid') == $dc->actorid ? 'selected' : '' }}>
                                {{ $dc->actorid }} - {{ $dc->address }}, {{ $dc->city }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>SP ID</th>
                <td>
                    <select class="form-select" name="spid" required>
                        <option value="" disabled selected>Select SP</option>
                        @foreach ($spActors as $sp)
                            <option value="{{ $sp->actorid }}" {{ old('spid') == $sp->actorid ? 'selected' : '' }}>
                                {{ $sp->actorid }} - {{ $sp->address }}, {{ $sp->city }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>Bid Fee</th>
                <td>
                    <input type="number" step="0.01" class="form-control" name="bidfee" value="{{ old('bidfee') }}" required>
                </td>
            </tr>
            <tr>
                <th>Status</th>
                <td>
                    <select class="form-select" name="other_tc_order_status" required>
                        <option value="" disabled selected>Select Status</option>
                        <option value="new" {{ old('other_tc_order_status') == 'new' ? 'selected' : '' }}>New</option>
                        <option value="bid_submitted" {{ old('other_tc_order_status') == 'bid_submitted' ? 'selected' : '' }}>Bid Submitted</option>
                        <option value="accepted" {{ old('other_tc_order_status') == 'accepted' ? 'selected' : '' }}>Accepted</option>
                        <option value="rejected" {{ old('other_tc_order_status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                    </select>
                </td>
            </tr>
        </table>

        <h3>Product Information</h3>
        <table class="table table-bordered">
            <tr>
                <th>Product</th>
                <td>
                    <select class="form-select" name="sku" required>
                        <option value="" disabled selected>Select Product</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->sku }}" {{ old('sku') == $product->sku ? 'selected' : '' }}>
                                {{ $product->product_name }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>
                    <input type="number" class="form-control" name="quantity" value="{{ old('quantity') }}" required>
                </td>
            </tr>
        </table>
        <button type="submit" class="btn btn-success mt-3">
            <i class="fas fa-save"></i> Save
        </button>
        <a href="{{ route('other-tc-orders.index') }}" class="btn btn-secondary mt-3">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </form>
</div>
@endsection