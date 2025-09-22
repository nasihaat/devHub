<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Skill;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit()
    {
        $user = Auth::user();
        $profile = $user->profile()->with(['skills', 'experiences', 'portfolios', 'products'])->first();
        $skills = Skill::all();

        return view('profile.edit', compact('user', 'profile', 'skills'));
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function updateDeveloperProfile(Request $request)
    {
        $request->validate([
            'bio' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'skills' => 'array',
            'skills.*' =>'exists:skills,id',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048', // validate image
        ]);

        $profile = Auth::user()->profile;
        
        // Prepare update data
        $updateData = [
            'bio' => $request->bio,
            'location' => $request->location,
        ];


        if($request->hasFile('photo'))
        {
             $file = $request->file('photo');
            $profileId = $profile->id;

            // Create a filename like "profile_5_photo.jpg"
            $filename = 'profile_' . $profileId . '_photo.' . $file->getClientOriginalExtension();

            // Store in profile_photos directory inside public storage
            $path = $file->storeAs('profile_photos', $filename, 'public');
            // Optional: Delete old photo
            if ($profile->photo && Storage::disk('public')->exists($profile->photo)) {
                Storage::disk('public')->delete($profile->photo);
            }
           
            $updateData['photo'] = $path;

        }
        // Update profile in one go
        $profile->update($updateData);

        // Sync skills
        $profile->skills()->sync($request->skills ?? []);
        return redirect('/')->with('success', 'Developer profile updated successfully');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
