@extends('layouts.client')

@section('title')
    Profile - AIS Gateway
@endsection

@section('content')

{{-- Profile --}}
<section class="container my-5">
    <h2 class="text-center mb-4">User Profile and Settings</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card p-4 shadow-sm">
        <form id="profileUpdateForm" method="POST">
            @csrf
            
            <div class="row mb-4">
                <div class="col-md-6">
                    <h4 class="mb-3">Login Details</h4>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                        <div class="invalid-feedback" id="email-error"></div>
                    </div>
                    <div class="mb-3">
                        <label for="current_password" class="form-label">Current Password</label>
                        <input type="password" class="form-control" id="current_password" name="current_password">
                        <div class="invalid-feedback" id="current_password-error"></div>
                    </div>
                    <div class="mb-3">
                        <label for="new_password" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="new_password" name="new_password">
                        <div class="invalid-feedback" id="new_password-error"></div>
                    </div>
                    <div class="mb-4">
                        <label for="confirm_new_password" class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control" id="confirm_new_password" name="new_password_confirmation">
                        <div class="invalid-feedback" id="new_password_confirmation-error"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h4 class="mb-3">Contact Information</h4>
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ auth()->user()->first_name }}">
                        <div class="invalid-feedback" id="first_name-error"></div>
                    </div>
                    <div class="mb-3">
                        <label for="middle_name" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{ auth()->user()->middle_name }}">
                        <div class="invalid-feedback" id="middle_name-error"></div>
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ auth()->user()->last_name }}">
                        <div class="invalid-feedback" id="last_name-error"></div>
                    </div>
                    <div class="mb-3">
                        <label for="mobile_number" class="form-label">Mobile Number</label>
                        <input type="text" class="form-control" id="mobile_number" name="mobile_number" value="{{ auth()->user()->mobile_number }}">
                        <div class="invalid-feedback" id="mobile_number-error"></div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Update Profile</button>
        </form>        
    </div>
</section>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#profileUpdateForm').on('submit', function(e) {
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
                url: "{{ route('profile.update') }}", // Update this to your profile update route
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Your profile has been updated successfully!',
                        timer: 5000,
                        showConfirmButton: false
                    }).then(() => {
                        location.reload(); // Reload the page to see the changes
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
                            html: errorMessage,
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
