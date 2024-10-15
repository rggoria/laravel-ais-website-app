@extends('auth.layouts.app')

@section('content')
<section class="vh-100">
    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            <div class="card shadow">
                <div class="row g-0 p-5">
                    <div class="col-md-6">
                        <div class="card-body">
                            <h2 class="card-title text-center">Register</h2>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
                                    @error('first_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="middle_name" class="form-label">Middle Name</label>
                                    <input type="text" class="form-control" name="middle_name" value="{{ old('middle_name') }}">
                                    @error('middle_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
                                    @error('last_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="mobile_number" class="form-label">Contact Number</label>
                                    <input type="text" class="form-control" name="mobile_number" value="{{ old('mobile_number') }}">
                                    @error('mobile_number')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
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
                    <div class="col-md-6 d-none d-md-flex">
                        <img class="img-fluid" src="{{ asset('asset/images/homepage/ais_logo_big.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
