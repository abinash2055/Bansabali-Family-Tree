@extends('frontend.layouts.app')

@section('content')
    <div class="container-fluid bg-light py-4">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-lg rounded-4">
                    <div class="card-header text-center ">
                        <h3><strong>Register</strong></h3>
                    </div>

                    <div class="card-body p-5">
                        <form method="POST" action="{{ route('register') }}" class="form-animate">
                            @csrf

                            <!-- Name -->
                            <div class="mb-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control form-control-lg" id="name" name="name"
                                    value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control form-control-lg" id="password" name="password"
                                    required>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label ">Confirm
                                    Password</label>
                                <input type="password" class="form-control form-control-lg" id="password_confirmation"
                                    name="password_confirmation" required>
                            </div>

                            <!-- Gender -->
                            <div class="mb-4">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-control form-control-lg" id="gender" name="gender" required>
                                    <option value="">Select Gender</option>
                                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                    <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('gender')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Phone Number -->
                            <div class="mb-4">
                                <label for="number" class="form-label ">Phone Number</label>
                                <input type="text" class="form-control form-control-lg" id="number" name="number"
                                    value="{{ old('number') }}" required>
                                @error('number')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid gap-2 mb-4 ">
                                <button type="submit" class="btn btn-success text-lg btn-lg">Register</button>
                            </div>
                        </form>

                        <!-- Link to Login Page -->
                        <div class="text-center mt-3">
                            <p class="text-muted">
                                {{ __('Already have an account?') }} <a
                                    href="{{ route('login') }}"><strong>Login</strong></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
