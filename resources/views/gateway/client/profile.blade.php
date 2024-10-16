@extends('layouts.client')

@section('title')
    Services [Product List] - AIS
@endsection

@section('content')

{{-- Ecommerce Products List --}}
<section class="container my-5">
    <h2 class="mb-4 text-center">
        User Profile and Settings
    </h2>

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

        <form action="" method="POST">
            @csrf
            
            <h4>Login Details</h4>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="current_password" class="form-label">Current Password</label>
                <input type="password" class="form-control" id="current_password" name="current_password">
                @error('current_password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="new_password" class="form-label">New Password</label>
                <input type="password" class="form-control" id="new_password" name="new_password">
                @error('new_password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="confirm_new_password" class="form-label">Confirm New Password</label>
                <input type="password" class="form-control" id="confirm_new_password" name="new_password_confirmation">
                @error('new_password_confirmation')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        
            <h4>Contact Information</h4>
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ auth()->user()->first_name }}">
                @error('first_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="middle_name" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{ auth()->user()->middle_name }}">
                @error('middle_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ auth()->user()->last_name }}">
                @error('last_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="mobile_number" class="form-label">Mobile Number</label>
                <input type="text" class="form-control" id="mobile_number" name="mobile_number" value="{{ auth()->user()->mobile_number }}">
                @error('mobile_number')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>        
    </div>
</section>

@endsection

@section('scripts')
    <script>

    </script>
@endsection
