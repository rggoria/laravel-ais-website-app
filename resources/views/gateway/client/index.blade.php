@extends('layouts.client')

@section('title')
    Order Status - AIS Gateway
@endsection

@section('content')

{{-- Ecommerce Products List --}}
<section class="container my-5">
    <h2 class="mb-4 text-center">Order Status Table</h2>
    <div class="table-responsive">
        <table class="table table-bordered">
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
                            <td>{{ $item->serial_number }}</td> <!-- Serial Number -->
                            <td>{{ $order->order_id }}</td> <!-- Order ID -->
                            <td>{{ $order->created_at->format('Y-m-d') }}</td> <!-- Order Date -->
                            <td>{{ $order->candidate_name }}</td> <!-- Candidate Name -->
                            <td>{{ $order->requestor }}</td> <!-- Requestor -->
                            <td>{{ $order->status }}</td> <!-- Status -->
                            <td class="text-center">
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
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
            
        </table>
    </div>
</section>


@endsection

@section('scripts')
    <script>
        console.log("users view");
    </script>
@endsection
