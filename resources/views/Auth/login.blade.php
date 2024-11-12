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
                <h3 class="text-center mb-4">Login</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required autofocus>
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

                                        <div class="form-group mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>

                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                <p class="text-center mt-3">belum Punya Akun?<a href="{{ route('register') }}">Register</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
