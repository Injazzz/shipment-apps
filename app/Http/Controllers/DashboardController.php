<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index($id)
    {
        // Ambil data pengguna yang sedang login
        $user = Auth::user();

        // Pastikan id yang ada di URL adalah milik pengguna yang sedang login
        if ($user->id != $id) {
            return redirect()->route('dashboard', ['id' => $user->id]); // Redirect ke dashboard pengguna yang sesuai
        }

        // Kirim data pengguna ke view
        return view('pages.dashboard.index', ['user' => $user]);
    }
}
