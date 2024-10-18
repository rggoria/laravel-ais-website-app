@extends('layouts.client')

@section('title')
    Services - AIS Gateway
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
        {{-- 1st --}}
        <div class="col-sm-12 col-md-4 col-lg-3 mb-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Employment Pass ★</h5>
                    <p class="card-text text-muted">    
                        Our top pick.
                        <br>
                        Every package comes with two complimentary appeals (worth S$599) and MOM fees (worth $360).
                        <br>
                        We ensure a seamless, stress-free experience from start to finish, maximising your likelihood of a successful application.
                    </p>                                     
                    <h5 class="card-text">
                        S$999
                        <span class="card-text text-muted">(+S$200 for express processing)</span>
                    </h5>    
                    <div class="mt-auto"></div>
                </div>
            </div>
        </div>
        {{-- 2nd --}}
        <div class="col-sm-12 col-md-4 col-lg-3 mb-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Dependent Pass</h5>
                    <p class="card-text text-muted">    
                        For pass holders who wish to bring their spouse and children to Singapore.
                        <br>
                        Every package comes with two complimentary appeals (worth S$599) and MOM fees (worth $360).
                        <br>
                        We ensure a seamless, stress-free experience from start to finish, maximising your likelihood of a successful application.
                    </p>                                     
                    <h5 class="card-text">
                        S$799
                        <span class="card-text text-muted">(+S$200 for express processing)</span>
                    </h5>    
                    <div class="mt-auto"></div>
                </div>
            </div>
        </div>
        {{-- 3rd --}}
        <div class="col-sm-12 col-md-4 col-lg-3 mb-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Long Term Visit Pass</h5>
                    <p class="card-text text-muted">    
                        For pass holders who wish to bring their parents to Singapore.
                        <br>
                        Every package comes with two complimentary appeals (worth S$599) and MOM fees (worth $360).
                        <br>
                        We ensure a seamless, stress-free experience from start to finish, maximising your likelihood of a successful application.
                    </p>                                     
                    <h5 class="card-text">
                        S$799
                        <span class="card-text text-muted">(+S$200 for express processing)</span>
                    </h5>                    
                    <div class="mt-auto"></div>
                </div>
            </div>
        </div>
        {{-- 4th --}}
        <div class="col-sm-12 col-md-4 col-lg-3 mb-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">One-Pass</h5>
                    <p class="card-text text-muted">    
                        For outstanding individuals who are getting a premium work pass.
                        <br>
                        Every package comes with two complimentary appeals (worth S$599) and MOM fees (worth $360) and an employment screening record (ranging from S$200 - S$500).
                        <br>
                        We ensure a seamless, stress-free experience from start to finish, maximising your likelihood of a successful application.
                    </p>                                     
                    <h5 class="card-text">
                        S$1,999
                        <span class="card-text text-muted">(+S$200 for express processing)</span>
                    </h5>    
                    <div class="mt-auto"></div>
                </div>
            </div>
        </div>
        {{-- 5th --}}
        <div class="col-sm-12 col-md-4 col-lg-3 mb-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Professional Employer Organisation (PEO)</h5>
                    <p class="card-text text-muted">    
                        Our PEO/EOR service handles employee onboarding, work pass applications, payroll, and compliance, allowing you to hire talent in Singapore without the need to establish a local entity.
                    </p>
                    <a class="btn btn-outline-dark" href="https://wa.me/message/W7WPF3DBC6LFM1">
                        Click here to get a quote
                    </a>
                    <div class="mt-auto"></div>
                </div>
            </div>
        </div>
         {{-- 6th --}}
         <div class="col-sm-12 col-md-4 col-lg-3 mb-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Work Pass Renewals</h5>
                    <p class="card-text text-muted">    
                        Apply up to 6 months in advance to allow timely renewals. Every package comes with two complimentary appeals (worth S$599) and MOM fees (worth S$255). We ensure a seamless, stress-free experience from start to finish, maximising your likelihood of a successful application.
                    </p>                                     
                    <h5 class="card-text">
                        S$849
                        <span class="card-text text-muted">(+S$200 for express processing)</span>
                    </h5>
                    <div class="mt-auto"></div>
                </div>
            </div>
        </div>
        {{-- 7th --}}
        <div class="col-sm-12 col-md-4 col-lg-3 mb-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Professional consultation</h5>
                    <p class="card-text text-muted">    
                        Our customised consultation service provides personalised immigration solutions, ensuring smooth work pass applications, compliance, and strategic advice to address your specific requirements.
                    </p>
                    <h5 class="card-text">
                        Price ranging from S$200 per session
                        <span class="card-text text-muted">(+S$200 for express processing)</span>
                    </h5>
                    <div class="mt-auto"></div>
                </div>
            </div>
        </div>
        {{-- 8th --}}
        <div class="col-sm-12 col-md-4 col-lg-3 mb-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Work Pass Appeals</h5>
                    <p class="card-text text-muted">    
                        Received a rejection for your work pass? Engage us for a second opinion and assess your chances for a successful appeal!
                    </p>                                     
                    <h5 class="card-text">
                        Price ranging from S$599 per session
                        <span class="card-text text-muted">(+S$200 for express processing)</span>
                    </h5>
                    <div class="mt-auto"></div>
                </div>
            </div>
        </div>       
    </div>    
</section>


@endsection

@section('scripts')
    <script>
        
    </script>
@endsection