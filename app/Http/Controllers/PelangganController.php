<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataPelangganExportView;

class PelangganController extends Controller
{
    public function index()
    {
        $data = Pelanggan::latest()->get();
        return view('Pelanggan.index', compact('data'));
    }

    public function create()
    {
        return view('Pelanggan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required|max:15',
        ],[
            'nama_pelanggan.required' => 'Nama Pelanggan Wajib Diisi',
            'alamat.required' => 'Alamat Lengkap Wajib Diisi',
            'nomor_telepon.required' => 'Nomor Telepon Wajib Diisi',
        ]);

        $data = [
            'nama_pelanggan' => $request->input('nama_pelanggan'),
            'alamat' => $request->input('alamat'),
            'nomor_telepon' => $request->input('nomor_telepon'),
        ];
        Pelanggan::create($data);
        return redirect('data-pelanggan')->with('success', 'Successfully added data');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Pelanggan::where('id', $id)->first();
        return view('Pelanggan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required|max:15',
        ],[
            'nama_pelanggan.required' => 'Nama Pelanggan Wajib Diisi',
            'alamat.required' => 'Alamat Lengkap Wajib Diisi',
            'nomor_telepon.required' => 'Nomor Telepon Wajib Diisi',
        ]);

        $data = [
            'nama_pelanggan' => $request->input('nama_pelanggan'),
            'alamat' => $request->input('alamat'),
            'nomor_telepon' => $request->input('nomor_telepon'),
        ];

        Pelanggan::where('id', $id)->update($data);
        return redirect('data-pelanggan')->with('success', 'Successfully updated data');
    }

    public function destroy($id)
    {
        Pelanggan::find($id)->delete();
        return redirect('data-pelanggan')->with('success', 'Successfully deleted data');
    }

    public function export_pdf()
    {
         //QUERY
         $data = Pelanggan::select('*');

         $data = $data->get();

         // Pass parameters to the export view
         $pdf = PDF::loadview('Pelanggan.exportPdf', ['data'=>$data]);
         $pdf->setPaper('a4', 'portrait');
         $pdf->setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
         // SET FILE NAME
         $filename = date('YmdHis') . '_data_pelanggan';
         // Download the Pdf file
         return $pdf->download($filename.'.pdf');
    }

    public function export_excel(Request $request)
    {
        //QUERY
        $data = Pelanggan::select('*');

        $data = $data->get();

        // Pass parameters to the export class
        $export = new DataPelangganExportView($data);

        // SET FILE NAME
        $filename = date('YmdHis') . '_data_pelanggan';

        // Download the Excel file
        return Excel::download($export, $filename . '.xlsx');
    }
}
