<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //

    public function index()
    {
         // Misal: Ambil user yang sedang login
        $user = Auth::user();

        return view('pages.profile.index', ['user' => $user]);
    }

    public function edit($id)
    {
        // Misal: Ambil user berdasarkan ID
        $user = User::findOrFail($id);

        return view('pages.profile.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('/profile')->with('success', 'Profile updated successfully.');
    }

}
