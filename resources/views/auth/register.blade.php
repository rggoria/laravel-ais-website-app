@extends('gateway.layouts.app')

@section('content')
<div class="container">
    <h2>Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name" required>
        </div>
        <div class="mb-3">
            <label for="middle_name" class="form-label">Middle Name</label>
            <input type="text" class="form-control" name="middle_name">
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name" required>
        </div>
        <div class="mb-3">
            <label for="mobile_number" class="form-label">Mobile Number</label>
            <input type="text" class="form-control" name="mobile_number">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
@endsection
