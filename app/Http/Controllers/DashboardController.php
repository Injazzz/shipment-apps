<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

public function index($id)
{
    // Ambil data pengguna yang sedang login
    $user = Auth::user();

    $ships = Ship::orderBy('created_at', 'desc')->take(5)->get();

    // Pastikan id yang ada di URL adalah milik pengguna yang sedang login
    if ($user->id != $id) {
        return redirect()->route('dashboard', ['id' => $user->id]); // Redirect ke dashboard pengguna yang sesuai
    }

    // Data untuk chart
    $chartData = Ship::selectRaw('
            MONTH(created_at) as month,
            YEAR(created_at) as year,
            COUNT(*) as total_ships,
            SUM(ship_t_bongkar) as total_tbongkar,
            SUM(ship_t_muat) as total_tmuat
        ')
        ->groupBy('year', 'month')
        ->orderBy('year', 'asc') // Tambahkan arah pengurutan (asc atau desc)
        ->orderBy('month', 'asc') // Tambahkan arah pengurutan (asc atau desc)
        ->get();

    // Format data untuk chart (sesuai kebutuhan chart.js atau library lainnya)
    $formattedData = [
        'months' => [],
        'total_ships' => [],
        'total_tbongkar' => [],
        'total_tmuat' => [],
    ];

    foreach ($chartData as $data) {
        $formattedData['months'][] = $data->month . '-' . $data->year; // Format bulan-tahun
        $formattedData['total_ships'][] = $data->total_ships;
        $formattedData['total_tbongkar'][] = $data->total_tbongkar;
        $formattedData['total_tmuat'][] = $data->total_tmuat;
    }

$comparison = [
    'current_month' => null,
    'previous_month' => null,
    'percentage_change' => null,
];

// Query untuk dua bulan terakhir
$recentData = Ship::selectRaw('
        MONTH(created_at) as month,
        YEAR(created_at) as year,
        COUNT(*) as total_ships
    ')
    ->groupBy('year', 'month')
    ->orderBy('year', 'desc')
    ->orderBy('month', 'desc')
    ->take(2)
    ->get();

if ($recentData->isNotEmpty()) {
    $currentMonthData = $recentData->first();
    $currentTotal = $currentMonthData->total_ships ?? 0;

    if ($recentData->count() === 2) {
        $previousMonthData = $recentData->last();
        $previousTotal = $previousMonthData->total_ships ?? 0;
    } else {
        $previousMonthData = null;
        $previousTotal = 0;
    }

    $percentageChange = $previousTotal > 0
        ? (($currentTotal - $previousTotal) / $previousTotal) * 100
        : 0;

    $comparison = [
        'current_month' => [
            'month' => $currentMonthData->month ?? 'N/A',
            'year' => $currentMonthData->year ?? 'N/A',
            'total_ships' => $currentTotal,
        ],
        'previous_month' => $previousMonthData
            ? [
                'month' => $previousMonthData->month ?? 'N/A',
                'year' => $previousMonthData->year ?? 'N/A',
                'total_ships' => $previousTotal,
            ]
            : [
                'month' => 'N/A',
                'year' => 'N/A',
                'total_ships' => 0,
            ],
        'percentage_change' => $percentageChange,
    ];
}




    // Kirim data pengguna dan data chart ke view
    return view('pages.dashboard.index', [
        'user' => $user,
        'chartData' => $formattedData,
        'comparison' => $comparison,
        'ships' => $ships,
    ]);
}



}
