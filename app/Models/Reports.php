<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    use HasFactory;

    protected $fillable = [
        'report_type',
        'total_data',
        'total_t_bongkar',
        'total_t_muat',
        'total_t_bongkar_muat',
    ];
}
