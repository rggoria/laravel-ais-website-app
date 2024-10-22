@extends('layouts.client')

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
                <h4 class="alert-heading mb-0">Your Order Status is Empty</h4>
            </div>
            <p>You have not placed any orders yet.</p>
            <hr>
            <p class="mb-0">Start exploring our products and make your first order!</p>
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
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $index => $order)
                        @foreach($order->orderItems as $item)
                            <tr onclick="window.location='{{ route('product-details', ['orderId' => $order->order_id]) }}';" style="cursor: pointer;">
                                <td>{{ $item->serial_number }}</td>
                                <td>{{ $order->order_id }}</td>
                                <td>{{ $order->created_at->format('Y-m-d') }}</td>
                                <td>{{ $order->candidate_name }}</td>
                                <td>{{ $order->requestor }}</td>
                                <td>{{ $order->status }}</td>
                                <td class="text-center">
                                    @switch($order->status)
                                        @case('Completed')
                                            <span class="text-success">
                                                <i class="fas fa-check-circle"></i>
                                            </span>
                                            @break
                                        @case('Cancelled')
                                            <span class="text-danger">
                                                <i class="fas fa-times-circle"></i>
                                            </span>
                                            @break
                                        @default
                                            <span class="text-warning">
                                                <i class="fas fa-hourglass-half"></i>
                                            </span>
                                    @endswitch
                                </td>
                                <td>
                                    Product: {{ $item->product_name }}, Variant: {{ $item->variant }} <br>
                                </td>
                                <td>{{ $order->updated_at->format('Y-m-d') }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</section>

@endsection