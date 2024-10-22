@extends('layouts.auth')

@section('content')
<section class="vh-100">
    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            <div class="card shadow">
                <div class="row g-0 p-5">
                    <div class="col-md-6">
                        <div class="card-body">
                            <h2 class="card-title text-center">Reset Your Password</h2>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form id="resetPasswordForm" method="POST">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <input type="hidden" name="email" value="{{ request()->get('email') }}">

                                <div class="mb-3">
                                    <label for="password" class="form-label">New Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                    <div class="invalid-feedback" id="password-error"></div>
                                </div>

                                <div class="mb-3">
                                    <label for="password-confirm" class="form-label">Confirm Password</label>
                                    <input type="password" name="password_confirmation" id="password-confirm" class="form-control">
                                    <div class="invalid-feedback" id="password-confirm-error"></div>
                                </div>

                                <button type="submit" class="btn btn-primary w-100">Reset Password</button>
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
        $('#resetPasswordForm').on('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            $.ajax({
                url: "{{ route('password.update') }}",
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    // Display success message
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Your password has been reset successfully!',
                        timer: 5000, // Show for 5 seconds
                        showConfirmButton: false
                    }).then(() => {
                        // Redirect or perform any other actions if needed
                        window.location.href = "{{ route('login') }}"; // Redirect to login
                    });
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        let errorMessage = 'Please fix the following errors:<br>';
                        
                        // Clear previous error messages
                        $('.invalid-feedback').text('');
                        $('input').removeClass('is-invalid'); // Remove previous invalid classes

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
