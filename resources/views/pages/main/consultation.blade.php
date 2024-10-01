@extends('layouts.master')

@section('title')
    Consultation - AIS
@endsection

@section('content')

{{-- Consulatation Section --}}
<section class="container my-5">   
    <div class="row py-5">
        <div class="col-md-6 offset-3">
             <h1 class="text-dmb fw-bolder display-5">
                Consultation Inquiry
            </h1>
            <hr>
            <p class="text-dark my-3">
                Feel free to send us a message. We would like to hear it from you!
            </p>
            <div class="p-4">
                <div id="response-message"></div>
                <form id="contact-form">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label text-dmb fw-bolder">Name <span class="sup text-danger">*</span></label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name">
                        <div id="name-error" class="invalid-feedback"></div>
                    </div>        
                    <div class="mb-3">
                        <label for="email" class="form-label text-dmb fw-bolder">Email <span class="sup text-danger">*</span></label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Enter your company email">
                        <div id="email-error" class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label text-dmb fw-bolder">Brief Description <span class="sup text-danger">*</span></label>
                        <textarea name="message" class="form-control" id="message" rows="3" placeholder="Enter your description"></textarea>
                        <div id="message-error" class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-outline-dark w-100">Submit</button>
                    </div>
                </form>
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