<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::all();
        return view('Produk.index', compact('data'));
    }

    public function stok_barang()
    {
        $data = Produk::all();
        return view('StokBarang.index', compact('data'));
    }

    public function create()
    {
        return view('Produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'tanggal' => 'required',
        ],[
            'nama_produk.required' => 'Nama Barang Wajib Diisi',
            'harga.required' => 'Harga Barang Diisi',
            'stok.required' => 'Stok Barang Diisi',
            'tanggal.required' => 'barang Masuk Wajib Diisi',
        ]);

        $data = [
            'nama_produk' => $request->input('nama_produk'),
            'harga' => $request->input('harga'),
            'stok' => $request->input('stok'),
            'tanggal' => $request->input('tanggal'),
        ];
        Produk::create($data);
        return redirect('data-produk')->with('success', 'Successfully added data');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Produk::where('id', $id)->first();
        return view('Produk.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required',

        ],[
            'nama_produk.required' => 'Nama Produk Wajib Diisi',
            'harga.required' => 'Harga Wajib Diisi',
            'stok.required' => 'Stok Wajib Diisi',

        ]);
        // Mengambil data produk yang ada
        $existingProduk = Produk::findOrFail($id);

        $data = [
            'nama_produk' => $request->input('nama_produk'),
            'harga' => $request->input('harga'),
            'stok' => $request->input('stok'),
            // Menggunakan tanggal dari data produk yang ada
            'tanggal' => $existingProduk->tanggal,
        ];
        Produk::where('id', $id)->update($data);
        return redirect('stok-barang')->with('success', 'Successfully updated data');
    }

    public function destroy($id)
    {
        Produk::where('id', $id)->delete();
        return redirect('stok-barang')->with('success', 'Successfully deleted data');
    }
}
