@extends('frontend.layouts.main')

@section('content')
    <div class="container">
        <h1>Edit Profile</h1>

        <!-- Display success message -->
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ url('/profile/edit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- Name -->
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control"
                            value="{{ old('name', $user->name) }}" required>
                    </div>
                </div>

                <!-- Birthdate -->
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="birthdate">Birthdate</label>
                        <input type="date" id="birthdate" name="birthdate" class="form-control"
                            value="{{ old('birthdate', $user->birthdate) }}" required>
                    </div>
                </div>

                <!-- Gender -->
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" class="form-control" required>
                            <option value="Male" {{ old('gender', $user->gender) == 'Male' ? 'selected' : '' }}>Male
                            </option>
                            <option value="Female" {{ old('gender', $user->gender) == 'Female' ? 'selected' : '' }}>Female
                            </option>
                            <option value="Other" {{ old('gender', $user->gender) == 'Other' ? 'selected' : '' }}>Other
                            </option>
                        </select>
                    </div>
                </div>

                <!-- Country -->
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" id="country" name="country" class="form-control"
                            value="{{ old('country', $user->country) }}" required>
                    </div>
                </div>

                <!-- City -->
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" class="form-control"
                            value="{{ old('city', $user->city) }}" required>
                    </div>
                </div>

                <!-- Phone Number -->
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" id="phone_number" name="phone_number" class="form-control"
                            value="{{ old('phone_number', $user->phone_number) }}">
                        @error('phone_number')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Profile picture -->
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="profile_picture">Profile Picture</label>
                        <input type="file" id="profile_picture" name="profile_picture" class="form-control">
                        @if ($user->profile_picture)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture"
                                    width="100">
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update Profile</button>
        </form>
    </div>
    <br>
    <br>
    <br>
    <br>
@endsection
