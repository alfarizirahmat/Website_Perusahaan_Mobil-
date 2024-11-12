@extends('layout.log')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/Car_55-removebg-preview.png') }}" alt="Logo" class="d-inline-block align-text-top">
                Zilio Group
            </a>
        </div>
    </nav>

    <div class="col-md-6">
        <div class="card shadow-lg p-4 border-0 rounded-3 text-bg-dark">
            <div class="card-body">
                <h3 class="text-center mb-4">Register</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your full name" required autofocus>
                                        @error('name')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                            </div>
                                                <div class="form-group mb-3">
                                                    <label for="email" class="form-label">Email Address</label>
                                                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                                                            @error('email')
                                                                <div class="text-danger mt-1">{{ $message }}</div>
                                                            @enderror
                                                                </div>
                                                                    <div class="form-group mb-3">
                                                                        <label for="password" class="form-label">Password</label>
                                                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
                                                                @error('password')
                                                                    <div class="text-danger mt-1">{{ $message }}</div>
                                                                @enderror
                                                                    </div>
                                                                <div class="form-group mb-3">
                                                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm your password" required>
                                                        </div>
                                                    <div class="form-group mb-3">
                                                <label for="role" class="form-label">Role</label>
                                            <select name="role" id="role" class="form-control" required>
                                        <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                        <button type="submit" class="btn btn-primary w-100">Register</button>
                    </form>
                <p class="text-center mt-3">Punya Akun? <a href="{{ route('login') }}">Login</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
