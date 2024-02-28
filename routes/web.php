<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailPenjualan;
use App\Http\Controllers\DetailPenjualanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return redirect('login'); });

Route::middleware(['guest'])->group(function() {
    // ROUTE LOGIN
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/auth', [LoginController::class, 'auth'])->name('auth');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function() {
    // ROUTE DASHBORAD
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('role:administrator,petugas');

    // ROUTE STOK BARANG
    Route::get('/data-produk', [ProdukController::class, 'index'])->name('data-produk')->middleware('role:administrator,petugas');
    Route::get('/create-produk', [ProdukController::class, 'create'])->name('create-produk')->middleware('role:administrator,petugas');
    Route::post('/store-produk', [ProdukController::class, 'store'])->name('store-produk')->middleware('role:administrator,petugas');
    Route::get('/edit-produk/{id}', [ProdukController::class, 'edit'])->name('edit-produk')->middleware('role:administrator,petugas');
    Route::put('/update-produk/{id}', [ProdukController::class, 'update'])->name('update-produk')->middleware('role:administrator,petugas');

    // ROUTE STOK BARANG
    Route::get('/stok-barang', [ProdukController::class, 'stok_barang'])->name('stok-barang')->middleware('role:administrator,petugas');
    Route::get('/delete-produk/{id}', [ProdukController::class, 'destroy'])->name('delete-produk')->middleware('role:administrator,petugas');

    // ROUTE PEMBELIAN
    Route::get('data-penjualan', [PenjualanController::class, 'index'])->name('data-penjualan')->middleware('role:administrator,petugas');
    Route::get('create-penjualan', [PenjualanController::class, 'create'])->name('create-penjualan')->middleware('role:administrator,petugas');
    Route::post('store-penjualan', [PenjualanController::class, 'store'])->name('store-penjualan')->middleware('role:administrator,petugas');
    Route::get('edit-penjualan/{id}', [PenjualanController::class, 'edit'])->name('edit-penjualan')->middleware('role:administrator,petugas');
    Route::put('update-penjualan/{id}', [PenjualanController::class, 'update'])->name('update-penjualan')->middleware('role:administrator,petugas');
    Route::get('delete-penjualan/{id}', [PenjualanController::class, 'destroy'])->name('delete-penjualan')->middleware('role:administrator,petugas');

    // ROUTE DETAIL PEMBELIAN
    Route::get('create-detail-penjualan', [DetailPenjualanController::class, 'create'])->name('create-detail-penjualan')->middleware('role:administrator,petugas');
    Route::post('store-detail-penjualan', [DetailPenjualanController::class, 'store'])->name('store-detail-penjualan')->middleware('role:administrator,petugas');

    // ROUTE PELANGGAN
    Route::get('/data-pelanggan', [PelangganController::class, 'index'])->name('data-pelanggan')->middleware('role:administrator,petugas');
    Route::get('/create-pelanggan', [PelangganController::class, 'create'])->name('create-pelanggan')->middleware('role:administrator,petugas');
    Route::post('/store-pelanggan', [PelangganController::class, 'store'])->name('store-pelanggan')->middleware('role:administrator,petugas');
    Route::get('/edit-pelanggan/{id}', [PelangganController::class, 'edit'])->name('edit-pelanggan')->middleware('role:administrator,petugas');
    Route::put('/update-pelanggan/{id}', [PelangganController::class, 'update'])->name('update-pelanggan')->middleware('role:administrator,petugas');
    Route::get('/delete-pelanggan/{id}', [PelangganController::class, 'destroy'])->name('delete-pelanggan')->middleware('role:administrator,petugas');
    Route::get('/export-pdf-pelanggan', [PelangganController::class, 'export_pdf'])->name('export-pdf-pelanggan')->middleware('role:administrator,petugas');
    Route::get('/export-excel-pelanggan', [PelangganController::class, 'export_excel'])->name('export-excel-pelanggan')->middleware('role:administrator,petugas');

    // ROUTE PENGGUNA
    Route::get('/data-pengguna', [PenggunaController::class, 'index'])->name('data-pengguna')->middleware('role:administrator');
    Route::get('/create-pengguna', [PenggunaController::class, 'create'])->name('create-pengguna')->middleware('role:administrator');
    Route::post('/store-pengguna', [PenggunaController::class, 'store'])->name('store-pengguna')->middleware('role:administrator');
    Route::get('/edit-pengguna/{id}', [PenggunaController::class, 'edit'])->name('edit-pengguna')->middleware('role:administrator');
    Route::put('/update-pengguna/{id}', [PenggunaController::class, 'update'])->name('update-pengguna')->middleware('role:administrator');
    Route::get('/delete-pengguna/{id}', [PenggunaController::class, 'destroy'])->name('delete-pengguna')->middleware('role:administrator');
});
