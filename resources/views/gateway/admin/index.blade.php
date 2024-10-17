@extends('layouts.admin')

@section('title')
    Admin Dashboard - AIS Gateway
@endsection

@section('content')
    <section class="container my-5">
        <div class="row">
            <!-- Orders Count -->
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-sm rounded-lg">
                    <div class="card-body bg-primary text-white d-flex align-items-center justify-content-between">
                        <div>
                            <h5 class="card-title">Total Orders</h5>
                            <p class="card-text display-4 mb-0">{{ $orderCount }}</p>
                        </div>
                        <i class="fas fa-box fa-3x"></i>
                    </div>
                </div>
            </div>

            <!-- Users Count -->
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-sm rounded-lg">
                    <div class="card-body bg-success text-white d-flex align-items-center justify-content-between">
                        <div>
                            <h5 class="card-title">Total Users</h5>
                            <p class="card-text display-4 mb-0">{{ $userCount }}</p>
                        </div>
                        <i class="fas fa-users fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
