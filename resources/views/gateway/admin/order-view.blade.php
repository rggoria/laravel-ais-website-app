@extends('layouts.admin')

@section('title')
    Admin Dashboard - AIS Gateway
@endsection

@section('content')
    <section class="container my-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered text-center align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $index => $order)
                                <tr>
                                    @php
                                        $remarks = json_decode($orders->remarks, true);
                                    @endphp                              
                                    <td class="d-flex">
                                        <img src="https://via.placeholder.com/50" alt="{{ $item['name'] }}" class="img-fluid me-2" style="max-width: 50px; max-height: 50px;">
                                        {{ $remark['product_name'] }}
                                    </td>
                                    <td>
                                        @foreach($remarks as $remark)
                                            {{ $remark['qty'] }}
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
