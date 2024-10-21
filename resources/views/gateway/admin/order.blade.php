@extends('layouts.admin')

@section('title')
    Order Status - AIS Gateway
@endsection

@section('content')

{{-- Order Status --}}
<section class="container my-5">
    <h2 class="mb-4 text-center">Order Status Table</h2>
    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead class="table-light">
                <tr>
                    <th class="align-middle">S/N</th>
                    <th class="align-middle">Order ID</th>
                    <th class="align-middle">Order Date</th>
                    <th class="align-middle">Name of Candidate</th>
                    <th class="align-middle">Requestor</th>
                    <th class="align-middle">Status</th>
                    <th class="align-middle">Status Icon</th>
                    <th class="align-middle">Remarks</th>
                    <th class="align-middle">Last Updated</th>
                    <th class="align-middle">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $index => $order)
                    @foreach($order->orderItems as $item)
                        <tr>
                            <td class="align-middle">{{ $item->serial_number }}</td> <!-- Serial Number -->
                            <td class="align-middle">{{ $order->order_id }}</td> <!-- Order ID -->
                            <td class="align-middle">{{ $order->created_at->format('Y-m-d') }}</td> <!-- Order Date -->
                            <td class="align-middle">{{ $order->candidate_name }}</td> <!-- Candidate Name -->
                            <td class="align-middle">{{ $order->requestor }}</td> <!-- Requestor -->
                            <td class="align-middle">{{ $order->status }}</td> <!-- Status -->
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
                            <td class="align-middle">
                                Product: {{ $item->product_name }}, Variant: {{ $item->variant }} <br>
                            </td> <!-- Remarks -->
                            <td class="align-middle">{{ $order->updated_at->format('Y-m-d') }}</td> <!-- Last Updated -->
                            <td class="align-middle">
                                <a href="{{ route('admin.order-view', ['orderId' => $order->order_id]) }}" class="btn btn-success btn-sm rounded-pill my-1">View Orders</a>
                                <a href="{{ route('admin.order-documents', ['orderId' => $order->order_id]) }}" class="btn btn-primary btn-sm rounded-pill my-1">View Document</a>
                            </td> <!-- Action -->
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
        console.log("Order status view");
    </script>
@endsection
