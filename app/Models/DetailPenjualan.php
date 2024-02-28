<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;

    protected $table = 'detail_penjualan';
    protected $guarded = ['id'];

    // RELASI DARI MODEL PENJUALAN KE DETAIL PENJUALAN
    public function penjualan()
    {
        return $this->belongsTo(Penjualan::class);
    }

    // RELASI DARI MODEL PRODUK KE DETAIL PENJUALAN
    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

}
