<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ShipsExport implements FromCollection, WithHeadings, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $data;
    protected $totals;

    public function __construct($data, $totals)
    {
        $this->data = $data;
        $this->totals = $totals;
    }

    public function collection()
    {
        // Transform data untuk ditambahkan total di bagian akhir
        $exportData = $this->data->map(function ($item, $index) {
            return [
                'no' => $index + 1, // Tambahkan nomor urut
                'created_at' => $item->created_at->format('Y-m-d') ,
                'ship_name' => $item->ship_name,
                'ship_line' => $item->ship_line,
                'ship_flag' => $item->ship_flag,
                'ship_t_bongkar' => formatTonnage($item->ship_t_bongkar),
                'ship_t_muat' => formatTonnage($item->ship_t_muat),
            ];
        });

        // Tambahkan baris kosong sebagai jeda
        $exportData->push([
            'no' => '',
            'created_at' => '',
            'ship_name' => '',
            'ship_line' => '',
            'ship_flag' => '',
            'ship_t_bongkar' => '',
            'ship_t_muat' => '',
        ]);

        // Tambahkan baris total
        $exportData->push([
            'no'=>'TOTAL',
            'created_at' => 'Total Bongkar + Muat: ' . $this->formatTonnage($this->totals['totalCombinedTonnage']),
            'ship_name' => '',
            'ship_line' => '',
            'ship_flag' => '',
            'ship_t_bongkar' => $this->formatTonnage($this->totals['totalTonnageBongkar']),
            'ship_t_muat' => $this->formatTonnage($this->totals['totalTonnageMuat']),
        ]);

        return $exportData;
    }

    /**
    * Format nilai tonnage sesuai logika yang diinginkan.
    */
    private function formatTonnage($value)
    {
        $tonnage = $value / 1000;
        $formattedTonnage = strpos(number_format($tonnage, 3, '.', ''), '.') === false
            ? number_format($tonnage, 2, ',', '.')
            : rtrim(rtrim(number_format($tonnage, 3, ',', '.'), '0'), ',');

        return $formattedTonnage . ' ton';
    }

    public function headings(): array
    {
        return [
            'No',
            'Created At',
            'Nama Kapal',
            'Line',
            'Flag',
            'Tonnage Bongkar',
            'Tonnage Muat',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
             // Gaya untuk seluruh header
            1 => [
                'font' => [
                    'bold' => true,
                ],
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                ],
            ],
            // Apply right alignment for bongkar and muat columns
            'A' => ['alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT]],
            'B' => ['alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT]],
            'E' => ['alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT]],
            'F' => ['alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT]],
        ];
    }
}
