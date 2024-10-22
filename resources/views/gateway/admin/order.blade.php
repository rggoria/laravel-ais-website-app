@extends('layouts.admin')

@section('title')
    Order Status - AIS Gateway
@endsection

@section('content')

{{-- Order Status --}}
<section class="container my-5">
    <h2 class="mb-4 text-center">Order Status Table</h2>

    @if($orders->isEmpty())
        <div class="alert alert-secondary text-center shadow-sm p-4">
            <div class="d-flex justify-content-center align-items-center mb-2">
                <i class="fas fa-shopping-cart fa-2x me-2"></i>
                <h4 class="alert-heading mb-0">No Orders Found</h4>
            </div>
            <p>Currently, there are no orders placed by users.</p>
            <hr>
            <p class="mb-0">We look forward to seeing new orders soon!</p>
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-bordered align-middle text-center">
                <thead class="table-light">
                    <tr>
                        <th>S/N</th>
                        <th>Order ID</th>
                        <th>Order Date</th>
                        <th>Name of Candidate</th>
                        <th>Requestor</th>
                        <th>Status</th>
                        <th>Status Icon</th>
                        <th>Remarks</th>
                        <th>Last Updated</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $index => $order)
                        @foreach($order->orderItems as $item)
                            <tr>
                                <td>{{ $item->serial_number }}</td> <!-- Serial Number -->
                                <td>{{ $order->order_id }}</td> <!-- Order ID -->
                                <td>{{ $order->created_at->format('Y-m-d') }}</td> <!-- Order Date -->
                                <td>{{ $order->candidate_name }}</td> <!-- Candidate Name -->
                                <td>{{ $order->requestor }}</td> <!-- Requestor -->
                                <td>{{ $order->status }}</td> <!-- Status -->
                                <td class="align-middle text-center">
                                    @switch($order->status)
                                        @case('Completed')
                                            <span class="text-success">
                                                <i class="fas fa-check-circle"></i> <!-- Success icon -->
                                            </span>
                                            @break
                                        @case('Cancelled')
                                            <span class="text-danger">
                                                <i class="fas fa-times-circle"></i> <!-- Cancelled icon -->
                                            </span>
                                            @break
                                        @default
                                            <span class="text-warning">
                                                <i class="fas fa-hourglass-half"></i> <!-- Pending/In Progress icon -->
                                            </span>
                                    @endswitch
                                </td> <!-- Status Icon -->
                                <td>
                                    Product: {{ $item->product_name }}, Variant: {{ $item->variant }} <br>
                                </td> <!-- Remarks -->
                                <td>{{ $order->updated_at->format('Y-m-d') }}</td> <!-- Last Updated -->
                                <td>
                                    <a href="{{ route('admin.order-view', ['orderId' => $order->order_id]) }}" class="btn btn-success btn-sm rounded-pill my-1">View Orders</a>
                                    <a href="{{ route('admin.order-documents', ['orderId' => $order->order_id]) }}" class="btn btn-primary btn-sm rounded-pill my-1">View Document</a>
                                </td> <!-- Action -->
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</section>

@endsection