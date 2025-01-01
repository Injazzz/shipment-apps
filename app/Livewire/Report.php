<?php

namespace App\Livewire;

use App\Models\Ship;
use Livewire\Component;

class Report extends Component
{
     public $dailyReport;
    public $monthlyReport;
    public $yearlyReport;

    public function mount()
    {
        $this->loadReports();
    }

   public function loadReports()
    {
        $today = now()->format('Y-m-d');
        $currentMonth = now()->month;
        $currentYear = now()->year;

        // Daily Report
        $daily = Ship::whereDate('created_at', $today)
            ->selectRaw('
                COUNT(*) AS total_data,
                SUM(ship_t_bongkar) AS total_t_bongkar,
                SUM(ship_t_muat) AS total_t_muat,
                SUM(ship_t_bongkar + ship_t_muat) AS total_t_bongkar_muat
            ')
            ->first();

        // Monthly Report
        $monthly = Ship::whereYear('created_at', $currentYear)
            ->whereMonth('created_at', $currentMonth)
            ->selectRaw('
                COUNT(*) AS total_data,
                SUM(ship_t_bongkar) AS total_t_bongkar,
                SUM(ship_t_muat) AS total_t_muat,
                SUM(ship_t_bongkar + ship_t_muat) AS total_t_bongkar_muat
            ')
            ->first();

        // Yearly Report
        $yearly = Ship::whereYear('created_at', $currentYear)
            ->selectRaw('
                COUNT(*) AS total_data,
                SUM(ship_t_bongkar) AS total_t_bongkar,
                SUM(ship_t_muat) AS total_t_muat,
                SUM(ship_t_bongkar + ship_t_muat) AS total_t_bongkar_muat
            ')
            ->first();

        // Format Results
        $this->dailyReport = [
            'total_data' => $daily->total_data ?? 0,
            'total_t_bongkar' => formatTonnage($daily->total_t_bongkar ?? 0),
            'total_t_muat' => formatTonnage($daily->total_t_muat ?? 0),
            'total_t_bongkar_muat' => formatTonnage($daily->total_t_bongkar_muat ?? 0),
        ];

        $this->monthlyReport = [
            'total_data' => $monthly->total_data ?? 0,
            'total_t_bongkar' => formatTonnage($monthly->total_t_bongkar ?? 0),
            'total_t_muat' => formatTonnage($monthly->total_t_muat ?? 0),
            'total_t_bongkar_muat' => formatTonnage($monthly->total_t_bongkar_muat ?? 0),
        ];

        $this->yearlyReport = [
            'total_data' => $yearly->total_data ?? 0,
            'total_t_bongkar' => formatTonnage($yearly->total_t_bongkar ?? 0),
            'total_t_muat' => formatTonnage($yearly->total_t_muat ?? 0),
            'total_t_bongkar_muat' => formatTonnage($yearly->total_t_bongkar_muat ?? 0),
        ];
    }

    public function render()
    {
        return view('livewire.report');
    }
}
