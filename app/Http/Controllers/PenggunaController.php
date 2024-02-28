<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PenggunaController extends Controller
{
    public function index()
    {
        $data = User::orderBy('id', 'desc')->get();
        return view('Pengguna.index')->with('data', $data);
    }

    public function create()
    {
        return view('Pengguna.create');
    }
    public function store(Request $request)
    {
        Session::flash('name', $request->input('name'));
        Session::flash('email', $request->input('email'));
        Session::flash('password', $request->input('password'));
        Session::flash('alamat', $request->input('alamat'));
        Session::flash('role', $request->input('role'));

    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
        'alamat' => 'required',
        'role' => 'required'
    ], [
        'name.required' => 'Nama Lengkap Wajib Diisi',
        'email.required' => 'Email Wajib Diisi',
        'email.email' => 'Email Yang Dimasukkan Tidak Valid',
        'email.unique' => 'Email Sudah Digunakan, Silakan Masukkan Email Yang Lain',
        'password.required' => 'Password Wajib Diisi',
        'password.min' => 'Minumum Password 8 Karakter',
        'alamat' => 'Alamat Lengkap Wajib Diisi',
        'role' => 'Role Wajib Diisi'
    ]);

    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'alamat' => $request->alamat,
        'role' => $request->role
    ];

    User::create($data);
    return redirect('data-pengguna')->with('success', 'Successfully added pengguna');


    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = User::where('id', $id)->first();
        return view('Pengguna.edit')->with('data', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'alamat' => 'required',
            'role' => 'required'
        ], [
            'name.required' => 'Name Wajib Diisi',
            'email.required' => 'Email Wajib Diisi',
            'email.email' => 'Email Yang Dimasukkan Tidak Valid',
            'password.required' => 'Password Wajib Diisi',
            'password.min' => 'Minumum Password 8 Karakter',
            'alamat' => 'Alamat Wajib Diisi',
            'role' => 'Role Wajib Diisi'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamat,
            'role' => $request->role
        ];

        User::where('id', $id)->update($data);
        return redirect('data-pengguna')->with('success', 'Successfully updated pengguna');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('data-pengguna')->with('success', 'Successfully deleted data');
    }
}
