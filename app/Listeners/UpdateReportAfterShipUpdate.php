<?php

namespace App\Listeners;

use App\Events\ShipUpdated;
use App\Models\Ship;
use App\Models\Reports;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateReportAfterShipUpdate
{
    /**
     * Handle the event.
     *
     * @param  \App\Events\ShipUpdated  $event
     * @return void
     */
    public function handle(ShipUpdated $event)
    {
        // Ambil data ship yang baru diperbarui
        $ship = $event->ship;

        // Dapatkan laporan terbaru dan lakukan pembaruan
        $this->updateReport();
    }

    /**
     * Method untuk memperbarui laporan
     */
    private function updateReport()
    {
        $today = now()->format('Y-m-d');
        $month = now()->format('Y-m');  // Format bulan dan tahun (YYYY-MM)
        $year = now()->year;           // Tahun saat ini

        // Laporan harian
        $this->updateDailyReport($today);

        // Laporan bulanan
        $this->updateMonthlyReport($month);

        // Laporan tahunan
        $this->updateYearlyReport($year);
    }

    /**
     * Memperbarui laporan harian
     */
    private function updateDailyReport($today)
    {
        $dailyReport = Ship::whereDate('created_at', $today)
            ->selectRaw('
                COUNT(*) AS total_data,
                SUM(ship_t_bongkar) AS total_t_bongkar,
                SUM(ship_t_muat) AS total_t_muat,
                SUM(ship_t_bongkar + ship_t_muat) AS total_t_bongkar_muat
            ')
            ->first();

        // Simpan atau perbarui laporan harian
        Reports::updateOrCreate(
            ['report_date' => $today, 'report_type' => 'daily'],
            [
                'total_data' => $dailyReport->total_data,
                'total_t_bongkar' => $dailyReport->total_t_bongkar,
                'total_t_muat' => $dailyReport->total_t_muat,
                'total_t_bongkar_muat' => $dailyReport->total_t_bongkar_muat
            ]
        );
    }

    /**
     * Memperbarui laporan bulanan
     */
    private function updateMonthlyReport($month)
    {
        $monthlyReport = Ship::whereYear('created_at', now()->year)
            ->whereMonth('created_at', now()->month)
            ->selectRaw('
                COUNT(*) AS total_data,
                SUM(ship_t_bongkar) AS total_t_bongkar,
                SUM(ship_t_muat) AS total_t_muat,
                SUM(ship_t_bongkar + ship_t_muat) AS total_t_bongkar_muat
            ')
            ->first();

        // Simpan atau perbarui laporan bulanan
        Reports::updateOrCreate(
            ['report_date' => $month, 'report_type' => 'monthly'],
            [
                'total_data' => $monthlyReport->total_data,
                'total_t_bongkar' => $monthlyReport->total_t_bongkar,
                'total_t_muat' => $monthlyReport->total_t_muat,
                'total_t_bongkar_muat' => $monthlyReport->total_t_bongkar_muat
            ]
        );
    }

    /**
     * Memperbarui laporan tahunan
     */
    private function updateYearlyReport($year)
    {
        $yearlyReport = Ship::whereYear('created_at', $year)
            ->selectRaw('
                COUNT(*) AS total_data,
                SUM(ship_t_bongkar) AS total_t_bongkar,
                SUM(ship_t_muat) AS total_t_muat,
                SUM(ship_t_bongkar + ship_t_muat) AS total_t_bongkar_muat
            ')
            ->first();

        // Simpan atau perbarui laporan tahunan
        Reports::updateOrCreate(
            ['report_date' => $year, 'report_type' => 'yearly'],
            [
                'total_data' => $yearlyReport->total_data,
                'total_t_bongkar' => $yearlyReport->total_t_bongkar,
                'total_t_muat' => $yearlyReport->total_t_muat,
                'total_t_bongkar_muat' => $yearlyReport->total_t_bongkar_muat
            ]
        );
    }
}
