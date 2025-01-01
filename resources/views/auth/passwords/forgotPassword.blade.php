@extends('frontend.layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0 rounded-lg animate__animated animate__fadeIn animate__delay-1s">
                    <div class="card-header text-center bg-info text-white">
                        <h2><strong>Forgot Password</strong></h2>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{ route('passwords.email') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" required autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Send Password Reset Link</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        /* Card Style */
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

        .btn-primary {
            background-color: #007bff;
            /* Primary blue color */
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            /* Dark blue on hover */
            border-color: #004085;
            transform: translateY(-3px);
        }

        /* Input field focus style */
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
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

        /* Success message style */
        .alert-success {
            font-size: 1rem;
            padding: 1rem;
            border-radius: 0.5rem;
        }
    </style>
@endpush
