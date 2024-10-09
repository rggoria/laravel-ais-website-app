@extends('gateway.layouts.app')

@section('content')
<section class="vh-100">
    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            <div class="card shadow">
                <div class="row g-0 p-5">                     
                    <div class="col-md-6">
                        <div class="card-body">
                            <h2 class="card-title text-center">Login</h2>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" required autofocus>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Login</button>
                                <div class="mt-3">
                                    <p class="small mb-5 pb-lg-2">
                                        <a class="text-muted" href="#" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal">Forgot password?</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 d-none d-md-flex">
                        <img class="img-fluid" src="{{ asset('asset/images/homepage/ais_logo_big.png') }}" alt="">
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
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="forgotEmail" class="form-label">Enter your email address</label>
                            <input type="email" class="form-control" id="forgotEmail" name="email" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Password Reset Link</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
