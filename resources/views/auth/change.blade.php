@extends('gateway.layouts.app')

@section('content')
<section class="vh-100">
    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            <div class="card shadow">
                <div class="row g-0 p-5">
                    <div class="col-md-6">
                        <div class="card-body">
                            <h2 class="card-title text-center">Change Password</h2>

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.change') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="password" class="form-label">New Password</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                    <div class="invalid-feedback" id="password-error"></div>
                                </div>

                                <div class="mb-3">
                                    <label for="password-confirm" class="form-label">Confirm Password</label>
                                    <input type="password" name="password_confirmation" id="password-confirm" class="form-control" required>
                                    <div class="invalid-feedback" id="password-confirm-error"></div>
                                </div>

                                <button type="submit" class="btn btn-primary w-100">Change Password</button>
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
</section>
@endsection
