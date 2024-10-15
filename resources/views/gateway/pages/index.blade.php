@extends('gateway.layouts.app')

@section('title')
    Services [Product List] - AIS
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
                    <tr onclick="window.location='ais-gateway/product-details';" style="cursor: pointer;">
                        <td>{{ $index + 1 }}</td> <!-- Serial Number -->
                        <td>{{ $order->order_id }}</td> <!-- Order ID -->
                        <td>{{ $order->order_date->format('Y-m-d') }}</td> <!-- Order Date -->
                        <td>{{ $order->candidate_name }}</td> <!-- Candidate Name -->
                        <td>{{ $order->requestor }}</td> <!-- Requestor -->
                        <td>{{ $order->status }}</td> <!-- Status -->
                        <td class="text-center">
                            @if($order->status === 'Completed')
                                <span class="text-success">&#128994;</span>
                            @elseif($order->status === 'Pending')
                                <span class="text-warning">&#128993;</span>
                            @elseif($order->status === 'In Progress')
                                <span class="text-warning">&#128993;</span>
                            @elseif($order->status === 'Cancelled')
                                <span class="text-danger">&#128996;</span>
                            @endif
                        </td> <!-- Status Icon -->
                        <td>
                            @php
                                $remarks = json_decode($order->remarks, true);
                            @endphp
                            @foreach($remarks as $remark)
                                Product: {{ $remark['product_name'] }}, Qty: {{ $remark['qty'] }} <br>
                            @endforeach
                        </td> <!-- Remarks -->
                        <td>{{ $order->updated_at->format('Y-m-d') }}</td> <!-- Last Updated -->
                    </tr>
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
