<?php

namespace App\Http\Controllers;

use App\Models\DetailPenjualan;
use App\Models\Pelanggan;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{

    public function index()
    {
        // TABLE DETAIL PENJUALAN
        $dtPenjualan = Penjualan::with('pelanggan')->latest()->get();

        // TABLE DATA PENJUALAN
        $dtDetailPenjualan = DetailPenjualan::with('penjualan', 'produk')->get();
        return view('Penjualan.index', compact('dtPenjualan', 'dtDetailPenjualan'));
    }

    public function create()
    {
        $pelanggan = Pelanggan::all();
        return view('Penjualan.create', compact('pelanggan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal_penjualan' => 'required',
            'total_harga' => 'required',
            'pelanggan_id' => 'required',
        ],[
            'tanggal_penjualan.required' => 'Tanggal Penjualan Wajib Diisi',
            'total_harga.required' => 'Total Harga Wajib Diisi',
            'pelanggan_id.required' => 'Pelanggan Wajib Diisi',
        ]);

        $data = [
            'tanggal_penjualan' => $request->input('tanggal_penjualan'),
            'total_harga' => $request->input('total_harga'),
            'pelanggan_id' => $request->input('pelanggan_id'),
        ];
        Penjualan::create($data);
        return redirect('data-penjualan')->with('success', 'Successfully added data');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::all();
        $data = Penjualan::where('id', $id)->first();
        return view('Penjualan.edit', compact('data', 'pelanggan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal_penjualan' => 'required',
            'total_harga' => 'required',
            'pelanggan_id' => 'required',
        ],[
            'tanggal_penjualan.required' => 'Tanggal Penjualan Wajib Diisi',
            'total_harga.required' => 'Total Harga Wajib Diisi',
            'pelanggan_id.required' => 'Pelanggan Wajib Diisi',
        ]);

        $data = [
            'tanggal_penjualan' => $request->input('tanggal_penjualan'),
            'total_harga' => $request->input('total_harga'),
            'pelanggan_id' => $request->input('pelanggan_id'),
        ];

        Penjualan::where('id', $id)->update($data);
        return redirect('data-penjualan')->with('success', 'Successfully updated data');
    }

    public function destroy($id)
    {
        Penjualan::where('id', $id)->delete();
        return redirect('data-penjualan')->with('success', 'Successfully deleted data');
    }
}
