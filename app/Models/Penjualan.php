<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualan';
    protected $guarded = ['id'];

    // RELASI DARI MODEL PELANGGAN KE PENJUALAN
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    // RELASI DARI MODEL PENJUALAN KE DETAIL PENJUALAN
    public function detail_penjualan()
    {
        return $this->hasMany(DetailPenjualan::class);
    }
}
