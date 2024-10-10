@extends('main.layouts.app')

@section('title')
    Client Testimonials - AIS
@endsection

@section('content')

{{-- Testimonials Section --}}
<section class="container my-5">
    <div class="row py-5">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <h1 class="fw-bolder">
                Client Testimonials
            </h1>
            <p class="lead">
                Our clients' success stories speak volumes.
            </p>            
        </div>
        <style>  
            .user-image {
                width: 50px; /* Image size */
                height: 50px;
                border-radius: 50%; /* Round image */
                object-fit: cover; /* Maintain aspect ratio */
            }
        </style>
        <div class="row g-3 mb-5">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="card p-3" style="height: 20rem">
                    <div class="container mt-5">
                        <div class="rating" aria-hidden="true">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="fw-bolder my-3">
                            "Josh has been very professional in troubleshooting work pass
                            rejections and providing us with the appropriate solutions to
                            rectify"
                        </p>
                        <div class="d-flex mt-3">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="https://via.placeholder.com/50" alt="User" class="user-image">
                            </div>
                            <div class="mx-3">
                                <p class="fw-bolder m-0">
                                    John Doe
                                </p>
                                CEO, ABC Global
                            </div>
                            <div class="vr mx-3"></div>
                            <div class="d-flex justify-content-center align-items-center">
                                <div>
                                    <i class="fab fa-webflow"></i>
                                    <span class="fw-bolder">
                                        Webflow
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="card p-3" style="height: 20rem">
                    <div class="container mt-5">
                        <div class="rating" aria-hidden="true">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="fw-bolder my-3">
                            "Professional and efficient service that exceeded my
                            expectations!"
                        </p>
                        <div class="d-flex mt-3">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="https://via.placeholder.com/50" alt="User" class="user-image">
                            </div>
                            <div class="mx-3">
                                <p class="fw-bolder m-0">
                                    Jane Smith
                                </p>
                                Manager, Global Corp
                            </div>
                            <div class="vr mx-3"></div>
                            <div class="d-flex justify-content-center align-items-center">
                                <div>
                                    <i class="fab fa-webflow"></i>
                                    <span class="fw-bolder">
                                        Webflow
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
    <script>
        console.log("users view");
    </script>
@endsection