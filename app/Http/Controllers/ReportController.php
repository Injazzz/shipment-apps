<?php

namespace App\Http\Controllers;

use App\Exports\ShipsExport;
use App\Models\Ship;
use App\Models\Reports;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            abort(403, 'Unauthorized action.');
        }

        $user = Auth::user();
        $countries = json_decode(file_get_contents(resource_path('data/countries.json')), true);

         // Ambil daftar tahun dari data di tabel `ships`
        $years = Ship::selectRaw('YEAR(created_at) as year')
            ->groupBy('year')
            ->orderBy('year', 'desc')
            ->pluck('year');


        return view('pages.report.index', compact('user', 'countries', 'years'));
    }

    public function yearReport($year)
    {
        if (!Auth::check()) {
            abort(403, 'Unauthorized action.');
        }

        $user = Auth::user();
        // Ambil data berdasarkan tahun, dikelompokkan per bulan
        $monthlyReports = Ship::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->whereYear('created_at', $year)
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        // Ambil data berdasarkan tahun dan bulan
        $yearlyData = Ship::whereYear('created_at', $year)
            ->paginate(10); // Pagination dengan 15 data per halaman

        // Ambil data berdasarkan tahun dan bulan tanpa paginasi untuk perhitungan total
        $totalQuery = Ship::whereYear('created_at', $year)
            ->get();

         // Menghitung total
        $totalData = $totalQuery->count();
        $totalTonnageBongkar = $totalQuery->sum('ship_t_bongkar');
        $totalTonnageMuat = $totalQuery->sum('ship_t_muat');
        $totalCombinedTonnage = $totalTonnageBongkar + $totalTonnageMuat;

        return view('pages.report.yearly', compact('year', 'monthlyReports','yearlyData', 'user',
        'totalData', 'totalTonnageBongkar', 'totalTonnageMuat', 'totalCombinedTonnage'));
    }

    public function monthReport($year, $month)
    {
        if (!Auth::check()) {
            abort(403, 'Unauthorized action.');
        }

        $user = Auth::user();
        // Ambil data berdasarkan tahun dan bulan
        $monthlyData = Ship::whereYear('created_at', $year)
            ->whereMonth('created_at', $month)
            ->paginate(10); // Pagination dengan 15 data per halaman

        // Ambil data berdasarkan tahun dan bulan tanpa paginasi untuk perhitungan total
        $totalQuery = Ship::whereYear('created_at', $year)
            ->whereMonth('created_at', $month);

        // Menghitung total dari semua data
        $totalData = $totalQuery->count();
        $totalTonnageBongkar = $totalQuery->sum('ship_t_bongkar');
        $totalTonnageMuat = $totalQuery->sum('ship_t_muat');
        $totalCombinedTonnage = $totalTonnageBongkar + $totalTonnageMuat;

        // Format data untuk dikirim ke tampilan
        return view('pages.report.monthly', compact(
            'year', 'month', 'user', 'monthlyData',
            'totalData', 'totalTonnageBongkar', 'totalTonnageMuat', 'totalCombinedTonnage'
        ));

    }

    public function export($year, $month = null)
    {
        if (!Auth::check()) {
            abort(403, 'Unauthorized action.');
        }

         // Validasi year dan month
        $this->validateYearAndMonth($year, $month);

        // Ambil data dan totalnya
        $result = $this->getShipDataWithTotals($year, $month);
        $data = $result['data'];
        $totals = $result['totals'];

        // Handle jika data kosong
        if ($data->isEmpty()) {
            return back()->with('error', 'No data found for the selected year/month.');
        }

        // Tentukan nama file berdasarkan parameter
        $fileName = $this->generateFileName($year, $month);

        // Export data ke Excel dengan tambahan total
        return Excel::download(new ShipsExport($data, $totals), $fileName);
    }

    private function getShipDataWithTotals($year, $month = null)
    {
        $query = Ship::whereYear('created_at', $year);

        if ($month) {
            $query->whereMonth('created_at', $month);
        }

        $data = $query->get();

        // Hitung total
        $totals = [
            'totalData' => $data->count(),
            'totalTonnageBongkar' => $data->sum('ship_t_bongkar'),
            'totalTonnageMuat' => $data->sum('ship_t_muat'),
            'totalCombinedTonnage' => $data->sum('ship_t_bongkar') + $data->sum('ship_t_muat'),
        ];

        return compact('data', 'totals');
    }

    /**
     * Validasi parameter year dan month.
     */
    private function validateYearAndMonth($year, $month)
    {
        if (!is_numeric($year) || strlen($year) !== 4) {
            abort(400, 'Invalid year parameter.');
        }

        if ($month !== null && (!is_numeric($month) || $month < 1 || $month > 12)) {
            abort(400, 'Invalid month parameter.');
        }
    }

    /**
     * Fungsi reusable untuk mengambil data berdasarkan tahun dan bulan.
     */
    private function getShipData($year, $month = null)
    {
        $query = Ship::whereYear('created_at', $year);

        if ($month) {
            $query->whereMonth('created_at', $month);
        }

        return $query->get();
    }

    /**
     * Generate nama file untuk ekspor.
     */
    private function generateFileName($year, $month = null)
    {
        return $month
            ? "report_IKKP_{$year}_month_{$month}.xlsx"
            : "report_IKKP_{$year}_full_year.xlsx";
    }


    public function exportFullYear($year)
    {
        return $this->export($year); // Hanya memanggil export dengan parameter year
    }

    public function exportPerMonth($year, $month)
    {
        return $this->export($year, $month); // Memanggil export dengan year dan month
    }

}

