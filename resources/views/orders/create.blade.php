@extends('layouts.app')

@section('title', 'Add Order')

@section('content')
<div class="container">
    <h1>Add Order</h1>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="orderid" class="form-label">Order ID</label>
            <input type="text" class="form-control" id="orderid" name="orderid" required>
        </div>
        <div class="mb-3">
            <label for="customer" class="form-label">Customer</label>
            <input type="text" class="form-control" id="customer" name="customer" value="Uniprocterlevergamble Ltd." readonly>
        </div>
        <div class="mb-3">
            <label for="dcid" class="form-label">DC ID</label>
            <select class="form-select" id="dcid" name="dcid" required>
                <option value="" selected disabled>Select DC ID</option>
                @foreach ($dcActors as $actor)
                    <option value="{{ $actor->actorid }}">{{ $actor->actorid }} - {{ $actor->address }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="spid" class="form-label">SP ID</label>
            <select class="form-select" id="spid" name="spid" required>
                <option value="" selected disabled>Select SP ID</option>
                @foreach ($spActors as $actor)
                    <option value="{{ $actor->actorid }}">{{ $actor->actorid }} - {{ $actor->address }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tcid" class="form-label">TC ID</label>
            <input type="text" class="form-control" id="tcid" name="tcid" value="TC09" readonly>
        </div>
        <div class="mb-3">
            <label for="order_status" class="form-label">Order Status</label>
            <select class="form-select" id="order_status" name="order_status" required>
                <option value="open">Open</option>
                <option value="open_for_bidding">Open for Bidding</option>
                <option value="pending">Pending</option>
                <option value="confirmed">Confirmed</option>
                <option value="assigned">Assigned</option>
                <option value="assigned_to_other_tc">Assigned to Other TC</option>
                <option value="completed">Completed</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="order_fee" class="form-label">Order Fee</label>
            <input type="number" step="0.01" class="form-control" id="order_fee" name="order_fee">
        </div>

        <!-- Product Selection -->
        <div class="mb-3">
            <label for="product" class="form-label">Products</label>
            <div class="input-group">
                <select class="form-select" id="product" name="product">
                    <option value="" disabled selected>Select a product</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                    @endforeach
                </select>
                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" min="1" required>
                <button type="button" class="btn btn-primary" id="add-product">
                    <i class="fas fa-plus"></i> Add
                </button>
            </div>
        </div>

        <!-- Products Table -->
        <div class="mb-3">
            <h5>Selected Products</h5>
            <table class="table table-bordered" id="selected-products-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>

        <!-- Hidden Inputs -->
        <div id="hidden-product-fields"></div>

        <button type="submit" class="btn btn-success">
            <i class="fas fa-save"></i> Save
        </button>
        <a href="{{ route('orders.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const addProductButton = document.getElementById('add-product');
        const productSelect = document.getElementById('product');
        const quantityInput = document.getElementById('quantity');
        const selectedProductsTable = document.getElementById('selected-products-table').querySelector('tbody');
        const hiddenProductFields = document.getElementById('hidden-product-fields');

        addProductButton.addEventListener('click', function () {
            const productId = productSelect.value;
            const productText = productSelect.options[productSelect.selectedIndex]?.text;
            const quantity = quantityInput.value;

            // Debugging log statements
            console.log('Product ID:', productId); // Check the selected product ID
            console.log('Product Name:', productText); // Check the selected product name
            console.log('Quantity:', quantity); // Check the entered quantity

            // Log all options in the dropdown for debugging
            Array.from(productSelect.options).forEach(option => {
                console.log('Option value:', option.value, '| Option text:', option.text);
            });

            // Check if product and quantity are valid
            if (!productId || !quantity || quantity <= 0) {
                alert('Please select a product and enter a valid quantity.');
                return;
            }

            // Add row to the table
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${productText}</td>
                <td>${quantity}</td>
                <td>
                    <button type="button" class="btn btn-danger btn-sm remove-product">
                        <i class="fas fa-trash"></i> Remove
                    </button>
                </td>
            `;
            selectedProductsTable.appendChild(row);

            // Add hidden inputs for the product and quantity
            hiddenProductFields.innerHTML += `
                <input type="hidden" name="products[]" value="${productId}">
                <input type="hidden" name="quantities[]" value="${quantity}">
            `;

            // Reset the select and input fields
            productSelect.value = '';
            quantityInput.value = '';

            // Remove product row on clicking the remove button
            row.querySelector('.remove-product').addEventListener('click', function () {
                row.remove();
            });
        });
    });
</script>
@endsection