@extends('layouts.master')

@section('title')
    Services [Product List] - AIS
@endsection

@section('content')

{{-- Eccomerce Products List --}}
<section class="container my-5">
    <div class="py-5">
        <p class="fw-bolder">
            Discover
        </p>
        <h1 class="fw-bolder">
            Products
        </h1>
        <p class="lead mb-0">
            Explore our range of tailored immigration solutions today!
        </p>
    </div>
    <div class="row">
        @foreach ( $productItems as $item)
            <div class="col-sm-12 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $item['title'] }}</h5>
                        <p class="card-text text-muted">    
                            {{ implode('<br>', json_decode($item['description'])) }}
                        </p>                                     
                        <h5 class="card-text">{{ $item['pricing_details'] }}</h5>
                        <div class="mt-auto"></div>
                    </div>
                </div>
            </div>   
        @endforeach      
    </div>
</section>


@endsection

@section('scripts')
    <script>
        console.log("users view");
    </script>
@endsection