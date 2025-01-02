<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    // Show edit profile form
    public function edit()
    {
        $user = Auth::user();
        return view('frontend.profiles.edit', compact('user'));
    }

    public function update(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'gender' => 'required|string',
            'country' => 'required|string',
            'city' => 'required|string',
            'phone_number' => 'nullable|digits_between:10,15', 
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Update user profile details
        $user->name = $validated['name'];
        $user->birthdate = $validated['birthdate'];
        $user->gender = $validated['gender'];
        $user->country = $validated['country'];
        $user->city = $validated['city'];

        // Update phone number if provided
        if ($request->filled('phone_number')) {
            $user->phone_number = $validated['phone_number'];
        }

        // Handle profile picture upload
        if ($request->hasFile('profile_picture')) {
            if ($user->profile_picture && Storage::exists($user->profile_picture)) {
                Storage::delete($user->profile_picture);
            }

            // Store the new profile picture
            $image = $request->file('profile_picture');
            $imagePath = $image->store('profile_pictures', 'public');
            $user->profile_picture = $imagePath;
        }

        // Save the updated user
        $user->save();

        // Success alert and redirect to the profile page
        Alert::success('Profile updated successfully!', 'Your profile has been updated.');
        
        return redirect()->route('profiles.profile');
    }

    public function show()
    {
        $user = Auth::user(); 
        $pageName = 'Profile Page'; 
        
        return view('frontend.profiles.profile', compact('user', 'pageName')); 
    }
}
