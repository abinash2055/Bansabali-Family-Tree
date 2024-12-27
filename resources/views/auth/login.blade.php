@extends('frontend.layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0 rounded-lg animate__animated animate__fadeIn animate__delay-1s">
                    <div class="card-header text-center bg-info text-white">
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
                    <div class="card-footer text-center">
                        <p class="mb-0">Don't have an account? <a href="{{ route('register') }}"
                                class="text-warning"><strong>Sign Up</strong></a></p>
                        <p><a href="#" class="text-muted">Forgot Password?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .card {
            border-radius: 1.5rem;
            transition: transform 0.3s ease-in-out;
        }

        .card-header {
            border-top-left-radius: 1.5rem;
            border-top-right-radius: 1.5rem;
            background-color: #17a2b8;
            /* Info color */
        }

        .card-footer {
            border-bottom-left-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }

        .btn-lg {
            font-size: 1.2rem;
            padding: 0.75rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-success {
            background-color: #28a745;
            /* Green color */
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            /* Dark green on hover */
            border-color: #1e7e34;
            transform: translateY(-3px);
        }

        .btn-warning {
            color: #ffc107;
            /* Yellow color */
        }

        .btn-warning:hover {
            color: #e0a800;
            text-decoration: underline;
        }

        .text-muted {
            font-size: 0.9rem;
        }

        .text-warning {
            color: #ffc107 !important;
        }

        .shadow-lg {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Animation for card */
        .animate__fadeIn {
            animation: fadeIn 1s ease-in-out;
        }

        .animate__delay-1s {
            animation-delay: 1s;
        }

        /* Custom animation */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Card hover animation */
        .card:hover {
            transform: scale(1.05);
        }
    </style>
@endpush
