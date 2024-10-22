@extends('layouts.auth')

@section('content')
<section class="vh-100">
    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            <div class="card shadow">
                <div class="row g-0 p-5">                     
                    <div class="col-md-6">
                        <div class="card-body">
                            <h2 class="card-title text-center">Login</h2>
                            <form id="loginForm" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" autofocus>
                                    <div class="invalid-feedback" id="email-error"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password">
                                    <div class="invalid-feedback" id="password-error"></div>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Login</button>
                                <div class="mt-3">
                                    <p class="small mb-5 pb-lg-2">
                                        <a class="text-muted" href="#" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal">Forgot password?</a>
                                    </p>
                                    <p class="small mb-0 text-center">
                                        Don't have an account? <a href="{{ route('register') }}" class="text-muted">Sign up now</a>
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

    <!-- Modal for Forgot Password -->
    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="forgotPasswordLabel">Forgot Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="forgotPasswordForm" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="forgotEmail" class="form-label">Enter your email address</label>
                            <input type="email" class="form-control" id="forgotEmail" name="email" required>
                            <div class="invalid-feedback" id="forgot-email-error"></div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Password Reset Link</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // AJAX for Login Form
        $('#loginForm').on('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            $.ajax({
                url: "{{ route('login') }}",
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    if (response.redirect) {
                        // Redirect to the URL provided in the response
                        window.location.href = response.redirect;
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Login successful!',
                            timer: 2000,
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

                        // Show the general error message if credentials are invalid
                        if (xhr.responseJSON.error) {
                            errorMessage += `${xhr.responseJSON.error}<br>`;
                        }

                        // Display the SweetAlert with the list of errors
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            html: errorMessage, // Use HTML to show the list
                        });
                    }
                }
            });
        });

        // AJAX for Forgot Password Form
        $('#forgotPasswordForm').on('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            $.ajax({
                url: "{{ route('password.email') }}",
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: response.message, // Use the message from the response
                        timer: 2000,
                        showConfirmButton: false
                    }).then(() => {
                        $('#forgotPasswordModal').modal('hide');
                        $('#forgotPasswordForm')[0].reset();
                    });
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        let errorMessage = 'Please fix the following errors:<br>';
                        
                        // Clear previous error messages
                        $('#forgot-email-error').text('');
                        
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
                    } else if (xhr.status === 404) {
                        // Handle email not found
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Email not found. Please check and try again.',
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
