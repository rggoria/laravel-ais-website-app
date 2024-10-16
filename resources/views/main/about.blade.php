@extends('layouts.app')

@section('title')
    About Us - AIS
@endsection

@section('content')

{{-- About Us Section --}}
<section class="container my-5">
    <div class="row py-5">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <p class="fw-bolder">
                Expertise
            </p>
            <h1 class="fw-bolder">
                Running a business is tough. Applying for a work pass doesn't have to be.
            </h1>
            <p class="lead">
                At All Immigration Services, our team brings direct, hands-on expertise to ensure quick, efficient submissions with high success rates.
            </p>
            <p class="lead">
                We’ve managed thousands of successful applications, and should any challenges arise, we’re ready to navigate them and get your application back on track. 
            </p>
            <p class="lead">
                Partnering with us means saving time and reducing costs, so you can focus fully on scaling your business.
            </p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="text-center">
                <img src="{{ asset('asset/images/homepage/hero.jpg') }}" class="img-fluid w-100 h-100" alt="Hero Image">
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