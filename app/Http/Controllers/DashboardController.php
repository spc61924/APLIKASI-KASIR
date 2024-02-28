<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Penjualan;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $total_pelanggan = Pelanggan::count();
        $total_produk = Produk::count();
        $total_penjualan = Penjualan::count();
        $total_pengguna = User::count();
        return view('Dashboard.index',compact(
            'total_pelanggan', 'total_produk',
            'total_penjualan', 'total_pengguna'
        ));
    }
}
