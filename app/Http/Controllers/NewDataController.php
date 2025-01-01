<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewDataController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            abort(403, 'Unauthorized action.');
        }

        $ships = Ship::orderBy('created_at', 'desc')->take(10)->get();

        $user = Auth::user();
        // Mendapatkan data negara dari file JSON
        $countries = json_decode(file_get_contents(resource_path('data/countries.json')), true);

        // Menampilkan form untuk input data
        return view('pages.newdata.index', compact('countries', 'user', 'ships'));
    }

    public function store(Request $request)
    {
        // Ambil data dari request dan ubah koma menjadi titik
        $requestData = $request->all();
        $requestData['ship_t_bongkar'] = str_replace(',', '.', $requestData['ship_t_bongkar']);
        $requestData['ship_t_muat'] = str_replace(',', '.', $requestData['ship_t_muat']);

        // Validasi input
        $validated = validator($requestData, [
            'ship_name' => 'required|string|max:255',
            'ship_line' => 'required|string|max:255',
            'ship_flag' => 'required|string|max:255',
            'ship_cargo' => 'required|string|max:255',
            'ship_t_bongkar' => 'required|numeric', // Dalam ton
            'ship_t_muat' => 'required|numeric', // Dalam ton
        ])->validate();

        // Konversi T/Bongkar ke kilogram
        $ship_t_bongkar = $validated['ship_t_bongkar'];
        $ton_bongkar = floor($ship_t_bongkar); // Bagian ton
        $kg_bongkar = ($ship_t_bongkar - $ton_bongkar) * 1000; // Bagian kilogram setelah titik

        // Konversi T/Muat ke kilogram
        $ship_t_muat = $validated['ship_t_muat'];
        $ton_muat = floor($ship_t_muat); // Bagian ton
        $kg_muat = ($ship_t_muat - $ton_muat) * 1000; // Bagian kilogram setelah titik

        // Gabungkan bagian ton dan kilogram untuk disimpan dalam kilogram
        $total_bongkar_kg = $ton_bongkar * 1000 + $kg_bongkar;
        $total_muat_kg = $ton_muat * 1000 + $kg_muat;

        // Simpan data kapal dalam kilogram
        Ship::create([
            'ship_name' => $validated['ship_name'],
            'ship_line' => $validated['ship_line'],
            'ship_flag' => $validated['ship_flag'],
            'ship_cargo' => $validated['ship_cargo'],
            'ship_t_bongkar' => $total_bongkar_kg, // Simpan dalam kilogram
            'ship_t_muat' => $total_muat_kg, // Simpan dalam kilogram
        ]);

        // Redirect atau beri pesan sukses
        return redirect()->route('newdata')->with('success', 'Data kapal berhasil disimpan!');
    }
}

