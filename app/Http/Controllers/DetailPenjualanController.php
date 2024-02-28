<?php

namespace App\Http\Controllers;

use App\Models\DetailPenjualan;
use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Http\Request;

class DetailPenjualanController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        $produk = Produk::all();
        $penjualan = Penjualan::all();
        return view('DetailPenjualan.create', compact('penjualan', 'produk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'penjualan_id' => 'required',
            'produk_id' => 'required',
            'jumlah_produk' => 'required',
            'subtotal' => 'required',
        ],[
            'penjualan_id.required' => 'Pelanggan Penjualan Wajib Diisi',
            'produk_id.required' => 'Nama Produk Wajib Diisi',
            'jumlah_produk.required' => 'Jumlah Produk Wajib Diisi',
            'subtotal.required' => 'Subtotal Wajib Diisi',
        ]);

        $data = [
            'penjualan_id' => $request->input('penjualan_id'),
            'produk_id' => $request->input('produk_id'),
            'jumlah_produk' => $request->input('jumlah_produk'),
            'subtotal' => $request->input('subtotal'),
        ];
        DetailPenjualan::create($data);
        return redirect('data-penjualan')->with('success', 'Successfully added data');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
