<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AprovalController extends Controller
{
    //

    public function index()
    {
         if (!Auth::check()) {
            abort(403, 'Unauthorized action.');
        }

        $user = Auth::user();

        // Mengambil semua data dari model Ship
        $ships = Ship::paginate(10); // Menampilkan 10 data per halaman

        // Mengambil data negara dari file JSON
        $countries = json_decode(file_get_contents(resource_path('data/countries.json')), true);

        return view('pages.aproval.index', compact('user', 'ships', 'countries'));
    }

    public function search(Request $request)
    {
        $user = Auth::user();

        // Mengambil data negara dari file JSON
        $countries = json_decode(file_get_contents(resource_path('data/countries.json')), true);

        $query = $request->input('query');

        // Lakukan pencarian berdasarkan kolom tertentu (contoh: nama kapal)
        $ships = Ship::where('ship_name', 'like', '%' . $query . '%')
            ->orWhere('ship_line', 'like', '%' . $query . '%')
            ->orWhere('ship_flag', 'like', '%' . $query . '%')
            ->paginate(10);

        return view('pages.aproval.index', [
            'ships' => $ships,
            'query' => $query,
            'user' => $user,
            'countries' => $countries
        ]);
    }

    public function details($id)
    {
        if (!Auth::check()) {
            abort(403, 'Unauthorized action.');
        }

        $user = Auth::user();

        $ship = Ship::findOrFail($id);

        if (!$ship) {
            abort(404, 'Ship not found.');
        }

        $ships = Ship::with('user')->paginate(10);

        // Mengambil data negara dari file JSON
        $countries = json_decode(file_get_contents(resource_path('data/countries.json')), true);

        return view('pages.aproval.details', compact('ship', 'user', 'ships', 'countries'));
    }

    public function verify($id)
    {
        $ship = Ship::findOrFail($id);
        $ship->isAproved = true;
        $ship->save();

        return redirect()->back()->with('success', 'Data berhasil diverifikasi.');
    }

}
