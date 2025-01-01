@extends('frontend.layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 bg-gray-700">
                <div class="card shadow-lg border-0 rounded-lg bg-gray-700">
                    <div class="card-header text-center bg-gray-900">
                        <h2><strong>Login</strong></h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf

                            <!-- Email Input -->
                            <div class="mb-4">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email"
                                    placeholder="Enter your email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Password Input -->
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control form-control-lg" id="password" name="password"
                                    placeholder="Enter your password" required>
                                @error('password')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Remember Me Checkbox -->
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>

                            <!-- Login Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-lg">Login</button>
                            </div>
                        </form>
                    </div>

                    <div class="card-footer text-center mt-3">
                        <p class="mb-0">Don't have an account? <a href="{{ route('register') }}"><strong>Sign
                                    Up</strong></a></p>
                        <p><a href="{{ route('password.request') }}" class="text-muted">Forgot Password?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
