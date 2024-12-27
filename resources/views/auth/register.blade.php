@extends('frontend.layouts.app')

@section('content')
    <div class="container-fluid bg-light py-5">
        <div class="row justify-content-center">
            <div class="col-md-4"> <!-- Decreased the width of the form -->
                <div class="card shadow-lg rounded-4">
                    <div class="card-header text-center bg-gradient-to-r from-purple-600 to-pink-500 text-white">
                        <h3>{{ __('Register') }}</h3>
                    </div>

                    <div class="card-body p-5">
                        <form method="POST" action="{{ route('register') }}" class="form-animate">
                            @csrf

                            <!-- Name -->
                            <div class="mb-4">
                                <label for="name" class="form-label text-indigo-600">Name</label>
                                <input type="text" class="form-control form-control-lg" id="name" name="name"
                                    value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="mb-4">
                                <label for="email" class="form-label text-indigo-600">Email</label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-4">
                                <label for="password" class="form-label text-indigo-600">Password</label>
                                <input type="password" class="form-control form-control-lg" id="password" name="password"
                                    required>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label text-indigo-600">Confirm
                                    Password</label>
                                <input type="password" class="form-control form-control-lg" id="password_confirmation"
                                    name="password_confirmation" required>
                            </div>

                            <!-- Phone Number -->
                            <div class="mb-4">
                                <label for="number" class="form-label text-indigo-600">Phone Number</label>
                                <input type="text" class="form-control form-control-lg" id="number" name="number"
                                    value="{{ old('number') }}" required>
                                @error('number')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid gap-2 mb-4">
                                <button type="submit" class="btn btn-gradient-primary btn-lg">Register</button>
                            </div>
                        </form>

                        <!-- Link to Login Page -->
                        <div class="text-center mt-3">
                            <p class="text-muted">
                                {{ __('Already have an account?') }} <a href="{{ route('login') }}"
                                    class="text-indigo-600">{{ __('Login here') }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom CSS and Animations -->
    <style>
        /* Body background color */
        body {
            background-color: #f4f6f9;
            /* Light gray background */
        }

        /* Form Slide Animation */
        .form-animate {
            animation: form-appear 1s ease-in-out;
        }

        @keyframes form-appear {
            0% {
                transform: scale(0.8);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* Card Styling */
        .card {
            border: none;
            border-radius: 15px;
            background: #ffffff;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            border-radius: 15px 15px 0 0;
            background: linear-gradient(90deg, #9b4dca, #f36b76);
        }

        .card-body {
            background-color: #ffffff;
            border-radius: 0 0 15px 15px;
        }

        .form-control {
            border-radius: 10px;
            padding: 15px;
            font-size: 1rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            border-color: #9b4dca;
            box-shadow: 0 0 10px rgba(155, 77, 202, 0.6);
        }

        .btn-gradient-primary {
            background: linear-gradient(90deg, #9b4dca, #f36b76);
            border: none;
            color: white;
            font-size: 1.2rem;
            padding: 12px 20px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .btn-gradient-primary:hover {
            background: linear-gradient(90deg, #f36b76, #9b4dca);
            box-shadow: 0px 10px 20px rgba(155, 77, 202, 0.4);
        }

        .text-indigo-600 {
            color: #9b4dca !important;
        }

        .text-danger {
            font-size: 0.875rem;
        }

        /* Responsive Card */
        @media (max-width: 768px) {
            .card {
                padding: 20px;
            }

            .btn-gradient-primary {
                font-size: 1rem;
                padding: 10px 15px;
            }
        }
    </style>
@endsection
