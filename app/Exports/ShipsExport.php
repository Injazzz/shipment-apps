<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ShipsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
     protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function view(): View
    {
        return view('exports.ships', [
            'data' => $this->data
        ]);
    }
}
