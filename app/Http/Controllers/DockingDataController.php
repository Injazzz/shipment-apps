<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DockingDataController extends Controller
{
    //

    public function index()
    {
        if (!Auth::check()) {
            abort(403, 'Unauthorized action.');
        }

        $user = Auth::user();

        // Mengambil semua data dari model Ship
        $ships = Ship::with('user')
                    ->paginate(10); // Menampilkan 10 data per halaman

        // Mengambil data negara dari file JSON
        $countries = json_decode(file_get_contents(resource_path('data/countries.json')), true);

        // Mengirimkan data ke view
        return view('pages.dockingdata.index', compact('countries', 'user', 'ships'));
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

        return view('pages.dockingdata.index', [
            'ships' => $ships,
            'query' => $query,
            'user' => $user,
            'countries' => $countries
        ]);
    }

    public function destroy($id)
    {
        $user = Auth::user();

        $ship = Ship::findOrFail($id);

         // Periksa apakah user yang login adalah pemilik data
        if ($ship->user_id !== $user->id) {
            abort(403, 'Unauthorized action.');
        }

        $ship->delete();

        return redirect()->route('dockingdata')->with('success', 'Data kapal berhasil dihapus.');
    }

    public function edit($id)
    {
        if (!Auth::check()) {
            abort(403, 'Unauthorized action.');
        }

        $user = Auth::user();

        $ship = Ship::findOrFail($id);

        Log::info('Ship:', ['ship' => $ship]);
        Log::info('User ID:', ['user_id' => $user->id]);

        $ship = Ship::findOrFail($id);
        if (!$ship) {
            abort(404, 'Ship not found.');
        }

        // Periksa apakah user yang login adalah pemilik data
        if ($ship->user_id !== $user->id) {
            abort(403, 'Unauthorized action.');
        }

        $ships = Ship::with('user')->paginate(10);

        // Mengambil data negara dari file JSON
        $countries = json_decode(file_get_contents(resource_path('data/countries.json')), true);

        return view('pages.dockingdata.edit', compact('ship', 'user', 'ships', 'countries'));

    }

    public function update(Request $request, $id)
    {
        // Ambil data dari request
        $requestData = $request->all();

        // Format ulang nilai inputan ship_t_bongkar dan ship_t_muat
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

        // Cari data kapal berdasarkan ID
        $ship = Ship::findOrFail($id);

        // Perbarui data kapal
        $ship->update([
            'ship_name' => $validated['ship_name'],
            'ship_line' => $validated['ship_line'],
            'ship_flag' => $validated['ship_flag'],
            'ship_cargo' => $validated['ship_cargo'],
            'ship_t_bongkar' => $total_bongkar_kg, // Simpan dalam kilogram
            'ship_t_muat' => $total_muat_kg, // Simpan dalam kilogram
        ]);

        // Redirect ke halaman docking data dengan pesan sukses
        return redirect()->route('dockingdata')->with('success', 'Data kapal berhasil diperbarui.');
    }


}
