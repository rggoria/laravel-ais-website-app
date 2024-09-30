@extends('layouts.master')

@section('title')
    OnePass Application - AIS
@endsection

@section('css')
    <style>           
        .form-check-input:checked + label {
            background-color: #343a40;
            color: white;
        }
    </style>
@endsection

@section('content')

{{-- Ecommerce Product Header Section - EP --}}
<section class="container my-5">
    <div class="row g-3">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <img src="https://via.placeholder.com/600x400" alt="Large Image" class="img-fluid">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="row g-3">
                <div class="col-6">
                    <img src="https://via.placeholder.com/300x200" alt="Small Image 1" class="img-fluid">
                </div>
                <div class="col-6">
                    <img src="https://via.placeholder.com/300x200" alt="Small Image 2" class="img-fluid">
                </div>
                <div class="col-6">
                    <img src="https://via.placeholder.com/300x200" alt="Small Image 3" class="img-fluid">
                </div>
                <div class="col-6 position-relative">
                    <img src="https://via.placeholder.com/300x200" alt="Small Image 4" class="img-fluid">
                    <div class="badge bg-white text-dark position-absolute bottom-0 start-50 m-3">Show all photos</div>
                </div>                              
            </div>         
        </div>
    </div>
    <div class="row my-5">
        <div class="col-sm-12 col-md-12 col-lg-7">       
            <h1 class="fw-bolder">
                OnePass Application
            </h1>  
            <p>
                The creme de la creme, piéce de resistance work pass available. Tailored for high income earners (Earning or will earn more than SS30,000 a month). We will order and absorb charges for employment verification proof if required to fulfil the government's (MOM) requirement.
            </p>
            <ul>
                <li>
                    Have drawn at least SS30,000 equivalent in fixed salary for the past 12 months, or will earn SS30,000 equivalent in the new job. If salary criteria not met you may still qualify if you have outstanding achievements in certain sectors.
                </li>
                <li>
                    For common-law spouse, Unmarried handicapped children aged 21 and above, Unmarried step-children under 21 years old and parents (if mass pass holder - working parent, is earning at least S$12,000)
                </li>
                <li>
                    Pass validity tagged to main pass holder (Working parent): between 2 to 5 years 2 free appeals to MOM for any rejected applications.
                </li>
            </ul>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-disclaimer-tab" data-bs-toggle="tab" data-bs-target="#nav-disclaimer" type="button" role="tab" aria-controls="nav-disclaimer" aria-selected="true">Disclaimer</button>            
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-disclaimer" role="tabpanel" aria-labelledby="nav-disclaimer-tab" tabindex="0">
                    <p>
                        While we are confident of our application rates, there may be instances beyond our control that would result in a pass rejection. Fret not our team of experts are trained to navigate such scenarios to get your application back on track. To sweeten the deal, we are providing up to free two appeals to salvage the application.
                    </p>
                </div>                    
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-5">       
            <h1 class="fw-bolder" id="price">
                S$1,999 (inclusive of S$365 government fees - MOM)
            </h1>
            <div class="d-flex align-items-center">
                <div class="rating" aria-hidden="true">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span class="ms-3"> (5 stars) • 10 reviews</span>
            </div>      
            <form>
                <div>
                    <p>Variant</p>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="form-check form-check-inline w-100 h-100 p-0">
                                <input class="form-check-input" type="radio" name="options" id="radio1" value="standard" style="display: none;" autocomplete="off" checked>
                                <label class="btn btn-outline-dark d-flex justify-content-center align-items-center w-100 h-100" for="radio1">
                                    <span>
                                        Standard Package
                                        <br>
                                        <small>Processed within 3 business days</small>                                        
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check form-check-inline w-100 h-100 p-0">
                                <input class="form-check-input" type="radio" name="options" id="radio2" value="express" style="display: none;"  autocomplete="off">
                                <label class="btn btn-outline-dark d-flex justify-content-center align-items-center w-100 h-100" for="radio2">
                                    <span>
                                        Express Package
                                        <br>                                  
                                        <small>Processed within 24 hours (Business days only)</small>                                        
                                    </span>
                                </label>
                            </div>
                        </div>                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="my-3">
                            <p>Quantity</p>
                            <input type="number" placeholder="Quantity" class="form-control">
                        </div>
                    </div>
                </div>            
                <button type="button" class="btn btn-dark w-100 mb-3">Add to cart</button>
                <button type="button" class="btn btn-outline-dark w-100 mb-3">Buy now</button>
                <p class="text-center">Bulk order discounts available</p>
            </form>
        </div>
    </div>
</section>

@endsection

@section('scripts')
    <script>
        console.log("users view");
        $(document).ready(function() {
            $('input[name="options"]').change(function() {
                if ($(this).val() === 'express') {
                    $('#price').html('S$2,199 (inclusive of S$365 government fees - MOM)');
                } else {
                    $('#price').html('S$1,999 (inclusive of S$365 government fees - MOM)');
                }
            });
        });
    </script>
@endsection