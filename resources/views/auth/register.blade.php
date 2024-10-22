@extends('layouts.auth')

@section('content')
<section class="vh-100">
    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            <div class="card shadow">
                <div class="row g-0 p-5">
                    <div class="col-md-6">
                        <div class="card-body">
                            <h2 class="card-title text-center">Register</h2>
                            <form id="registerForm" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
                                    <div class="invalid-feedback" id="first_name-error"></div>
                                </div>

                                <div class="mb-3">
                                    <label for="middle_name" class="form-label">Middle Name</label>
                                    <input type="text" class="form-control" name="middle_name" value="{{ old('middle_name') }}">
                                    <div class="invalid-feedback" id="middle_name-error"></div>
                                </div>

                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
                                    <div class="invalid-feedback" id="last_name-error"></div>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    <div class="invalid-feedback" id="email-error"></div>
                                </div>

                                <div class="mb-3">
                                    <label for="mobile_number" class="form-label">Contact Number</label>
                                    <input type="text" class="form-control" name="mobile_number" value="{{ old('mobile_number') }}">
                                    <div class="invalid-feedback" id="mobile_number-error"></div>
                                </div>

                                <button type="submit" class="btn btn-primary w-100">Register</button>
                                <div class="mt-3">
                                    <p class="small mb-0 text-center">
                                        Already have an account? <a href="{{ route('login') }}" class="text-muted">Login now</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-md-flex justify-content-center p-5">
                        <img 
                            class="img-fluid" 
                            src="{{ asset('asset/images/homepage/ais_logo_big.png') }}" 
                            alt="AIS Logo" 
                            style="width: 500px; height: auto; object-fit: contain;" 
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#registerForm').on('submit', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Please wait...',
                html: `
                    <div class="spinner-border m-5" style="width: 5rem; height: 5rem;" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="text-center">Processing your request</p>
                `,
                allowOutsideClick: false,
                showConfirmButton: false,
                onBeforeOpen: () => {
                    Swal.showLoading();
                }
            });

            $.ajax({
                url: "{{ route('register') }}",
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    if (response.redirect) {
                        window.location.href = response.redirect; // Redirect on success
                    } else {
                        $('#registerForm')[0].reset();
                        $('.invalid-feedback').text('');
                        $('input').removeClass('is-invalid');

                        // Display a success message
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Registration successful! Please check your email for further instructions.',
                            timer: 5000, // Show for 5 seconds
                            showConfirmButton: false
                        });
                    }
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        let errorMessage = 'Please fix the following errors:<br>';
                        
                        // Clear previous error messages
                        $('.invalid-feedback').text('');

                        // Check for specific validation errors
                        let errors = xhr.responseJSON.errors;
                        if (errors) {
                            for (const [key, value] of Object.entries(errors)) {
                                $('#' + key + '-error').text(value[0]);
                                $('input[name="' + key + '"]').addClass('is-invalid'); // Add invalid class
                                errorMessage += `${value[0]}<br>`; // Append error to message
                            }
                        }

                        // Display the SweetAlert with the list of errors
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            html: errorMessage, // Use HTML to show the list
                        });
                    } else {
                        // Handle other errors (e.g., server errors)
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong. Please try again later.',
                        });
                    }
                }
            });
        });
    });
</script>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('#registerForm').on('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            $.ajax({
                url: "{{ route('register') }}",
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    if (response.redirect) {
                        window.location.href = response.redirect; // Redirect on success
                    } else {
                        // Clear the input fields
                        $('#registerForm')[0].reset();
                        
                        // Clear invalid feedback and remove invalid classes
                        $('.invalid-feedback').text('');
                        $('input').removeClass('is-invalid');

                        // Display a success message
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Registration successful! Please check your email for further instructions.',
                            timer: 5000, // Show for 5 seconds
                            showConfirmButton: false
                        });
                    }
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        let errorMessage = 'Please fix the following errors:<br>';
                        
                        // Clear previous error messages
                        $('.invalid-feedback').text('');

                        // Check for specific validation errors
                        let errors = xhr.responseJSON.errors;
                        if (errors) {
                            for (const [key, value] of Object.entries(errors)) {
                                $('#' + key + '-error').text(value[0]);
                                $('input[name="' + key + '"]').addClass('is-invalid'); // Add invalid class
                                errorMessage += `${value[0]}<br>`; // Append error to message
                            }
                        }

                        // Display the SweetAlert with the list of errors
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            html: errorMessage, // Use HTML to show the list
                        });
                    } else {
                        // Handle other errors (e.g., server errors)
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong. Please try again later.',
                        });
                    }
                }
            });
        });
    });
</script>
@endsection