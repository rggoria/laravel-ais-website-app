@extends('layouts.admin')

@section('title')
    Admin Dashboard - AIS Gateway
@endsection

@section('content')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<section class="container my-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="mb-3 d-flex justify-content-between align-items-center">
                <h5>Order ID: <span class="text-primary">{{ $orders->order_id }}</span></h5>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addFreeOrderModal">Add Free Order!</button>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered text-center align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Variant</th>
                            <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $itemCounts = [];
                        @endphp

                        @foreach($orders->orderItems as $item)
                            @php
                                $key = $item->product_name . '|' . $item->variant;
                                if (!isset($itemCounts[$key])) {
                                    $itemCounts[$key] = [
                                        'product_name' => $item->product_name,
                                        'variant' => $item->variant,
                                        'quantity' => 0,
                                    ];
                                }
                                $itemCounts[$key]['quantity']++;
                            @endphp
                        @endforeach

                        @foreach($itemCounts as $count)
                            <tr>
                                <td>{{ $count['product_name'] }}</td>
                                <td>{{ $count['variant'] }}</td>
                                <td>{{ $count['quantity'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Modal Structure -->
<div class="modal fade" id="addFreeOrderModal" tabindex="-1" aria-labelledby="addFreeOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFreeOrderModalLabel">Add Free Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="orderForm" method="POST" action="{{ route('admin.order-update', $orders->order_id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="orderName" class="form-label">Order Name</label>
                        <select class="form-select" id="orderName" name="product_id" required>
                            <option value="" disabled selected>Select a product</option>
                            @foreach($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="orderQuantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="orderQuantity" name="qty" min="1" value="1" required>
                    </div>

                    <div class="mb-3">
                        <label for="orderVariant" class="form-label">Variant</label>
                        <select class="form-select" id="orderVariant" name="variant" required>
                            <option value="" disabled selected>Select a variant</option>
                            <option value="Standard">Standard</option>
                            <option value="Express">Express</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="submitOrderButton">Add Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('submitOrderButton').addEventListener('click', function() {
        const form = document.getElementById('orderForm');
        const productSelect = document.getElementById('orderName');
        const variantSelect = document.getElementById('orderVariant');
        
        // Check if a product is selected
        if (!productSelect.value) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please select a product!',
            });
            return; // Stop the submission
        }

        // Check if a variant is selected
        if (!variantSelect.value) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please select a variant!',
            });
            return; // Stop the submission
        }

        // If both product and variant are selected, show confirmation
        Swal.fire({
            title: 'Are you sure?',
            text: "You want to add this order!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, add it!'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
</script>
@endsection

@endsection
