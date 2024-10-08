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
                At All Immigration Services, our team of experts who were formerly employed by the local government ministries (e.g. Ministry of Of direct reanpower) bring years of direct regulatory experience
                to the work pass application process, ensuring efficient submissions and
                high success rates. With thousands of successful applications handled in
                the past, we are confident in delivering only the best. If challenges arise, we
                are equipped to navigate rejections smoothly and get your application
                back on track.
            </p>
            <p class="lead">
                Our tailored solutions save you time and reduce costs while you
                focus on growing your business!
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