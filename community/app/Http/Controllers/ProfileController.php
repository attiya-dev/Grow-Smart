<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\User;

class ProfileController extends Controller
{
    public function show()
    {
        return view('profile');
    }

    public function update(Request $request)
    {
        $request->validate([
            'profile_photo' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login');
        }

        $folder = public_path('images/profiles');

        if (!File::exists($folder)) {
            File::makeDirectory($folder, 0755, true);
        }

        $file = $request->file('profile_photo');

        if (!$file) {
            return back()->withErrors([
                'profile_photo' => 'Please select an image.'
            ]);
        }

        if ($user->profile_photo) {
            $oldFile = public_path($user->profile_photo);

            if (File::exists($oldFile)) {
                File::delete($oldFile);
            }
        }

        $extension = strtolower($file->getClientOriginalExtension());

        $filename = 'profile_' . $user->id . '_' . time() . '.' . $extension;

        $file->move($folder, $filename);

        $profilePhoto = 'images/profiles/' . $filename;

        User::where('id', $user->id)->update([
            'profile_photo' => $profilePhoto,
            'updated_at' => now(),
        ]);

        return redirect()
            ->route('profile')
            ->with('success', 'Profile photo updated successfully.');
    }

    public function delete()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login');
        }

        if ($user->profile_photo) {
            $file = public_path($user->profile_photo);

            if (File::exists($file)) {
                File::delete($file);
            }
        }

        User::where('id', $user->id)->update([
            'profile_photo' => null,
            'updated_at' => now(),
        ]);

        return redirect()
            ->route('profile')
            ->with('success', 'Profile photo removed successfully.');
    }
}
