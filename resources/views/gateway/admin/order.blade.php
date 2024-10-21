@extends('layouts.admin')

@section('title')
    Order Status - AIS Gateway
@endsection

@section('content')

{{-- Order Status --}}
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
                            <th>
                                <a href="{{ route('admin.order-view', ['orderId' => $order->order_id]) }}" class="btn btn-success">View Orders</a>
                                <a href="{{ route('admin.order-documents', ['orderId' => $order->order_id]) }}" class="btn btn-primary">View Document</a>
                            </th>
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
