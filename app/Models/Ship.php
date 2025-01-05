<?php

namespace App\Models;

use App\Events\ShipUpdated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    use HasFactory;

    // Tentukan kolom yang dapat diisi secara mass-assignment
    protected $fillable = [
        'user_id',
        'ship_name',
        'ship_line',
        'ship_flag',
        'ship_cargo',
        'ship_t_bongkar',
        'ship_t_muat',
        'isAproved',
    ];

     protected $dispatchesEvents = [
        'updated' => ShipUpdated::class, // Trigger event ketika data diperbarui
        'created' => ShipUpdated::class, // Trigger event ketika data dibuat
    ];

    // Relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

     protected static function booted()
    {

    }
}
