<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //

    public function index()
    {
        if (!Auth::check()) {
        abort(403, 'Unauthorized action.');
        }

        $user = Auth::user();
        return view('pages.profile.index', ['user' => $user]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        // Pastikan pengguna hanya dapat mengedit profilnya sendiri
        if ($user->id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('pages.profile.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id,
            'phone' => 'nullable|string|max:20',
            'office' => 'nullable|string|max:255',
            'role' => 'nullable|string|max:255',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'current_password' => 'nullable|required_with:new_password|string',
            'new_password' => 'nullable|string|min:8|confirmed',
        ]);

        $user = User::findOrFail($id);

        // Pastikan pengguna hanya dapat mengedit profilnya sendiri
        if ($user->id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = preg_replace('/\D/', '', $request->phone);  // Menghapus semua non-digit karakter
        $user->office = $request->office;
        $user->role = $request->role;

        if ($request->hasFile('profile_photo')) {
            $fileName = time() . '.' . $request->profile_photo->extension();
            $request->profile_photo->storeAs('profile_photos', $fileName, 'public');
               // Simpan path file ke database
            $user->profile_photo = $fileName;
        }

        // Jika password diubah, validasi password saat ini
        if ($request->filled('current_password')) {
            if (!Hash::check($request->current_password, $user->password)) {
                return back()->withErrors(['current_password' => 'Current password is incorrect']);
            }

            // Update password baru
            $user->password = Hash::make($request->new_password);
        }

        $user->save();
        // Simpan URL ke session untuk ditampilkan di view
        session(['profile_photo_url' => asset('storage/profile_photos/' . $fileName)]);

        return redirect()->route('profile.edit', $id)->with('success', 'Profile updated successfully.')->with('profile_photo_url', asset('storage/profile_photos/' . $user->profile_photo));
    }

}
