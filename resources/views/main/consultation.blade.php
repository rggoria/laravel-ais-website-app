@extends('layouts.app')

@section('title')
    Consultation - AIS
@endsection

@section('content')

{{-- Consultation Section --}}
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
                <form id="consultationForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label text-dmb fw-bolder">Name <span class="sup text-danger">*</span></label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name" value="{{ old('name') }}">
                        <div class="invalid-feedback" id="name-error"></div>
                    </div>        
                    <div class="mb-3">
                        <label for="email" class="form-label text-dmb fw-bolder">Email <span class="sup text-danger">*</span></label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Enter your company email" value="{{ old('email') }}">
                        <div class="invalid-feedback" id="email-error"></div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label text-dmb fw-bolder">Brief Description <span class="sup text-danger">*</span></label>
                        <textarea name="description" class="form-control" id="description" rows="3" placeholder="Enter your description">{{ old('description') }}</textarea>
                        <div class="invalid-feedback" id="description-error"></div>
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
    $(document).ready(function() {
        $('#consultationForm').on('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            $.ajax({
                url: "{{ route('consultation_email') }}",
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    $('.invalid-feedback').text('');
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: response.message,
                    });
                    $('#consultationForm')[0].reset(); // Reset the form
                },
                error: function(xhr) {
                    let errors = xhr.responseJSON.errors;
                    let errorMessage = 'Please fix the following errors:<br>';
                    
                    // Clear previous error messages
                    $('.invalid-feedback').text('');
                    
                    // Add errors to the alert message
                    for (const [key, value] of Object.entries(errors)) {
                        $('#' + key + '-error').text(value[0]);
                        $('#' + key).addClass('is-invalid'); // Add invalid class
                        errorMessage += `${value[0]}<br>`; // Append error to message
                    }

                    // Display the SweetAlert with the list of errors
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        html: errorMessage, // Use HTML to show the list
                    });
                }
            });
        });
    });
</script>
@endsection
