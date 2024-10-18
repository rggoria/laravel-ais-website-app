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
                <!-- Button to trigger modal -->
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
                            $remarks = json_decode($orders->remarks, true);
                        @endphp
                        @foreach($remarks as $remark)
                            <tr>
                                <td class="d-flex">
                                    <img src="https://via.placeholder.com/50" alt="{{ $orders->product_name }}" class="img-fluid me-2" style="max-width: 50px; max-height: 50px;">
                                    {{ $remark['product_name'] }} 
                                </td>
                                <td>
                                    {{ $remark['variant'] }} 
                                </td>
                                <td>
                                    {{ $remark['qty'] }} 
                                </td>
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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFreeOrderModalLabel">Add Free Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form to submit order -->
                <form id="orderForm" method="POST" action="{{ route('admin.order-update', $orders->order_id) }}">
                    @csrf
                    @method('PUT') <!-- Use PUT for updating -->

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
                        <button type="submit" class="btn btn-primary">Add Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
