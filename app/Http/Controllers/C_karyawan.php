<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_karyawan;

class C_karyawan extends Controller
{
    public function index()
    {
        $karyawan = M_karyawan::orderBy('id','asc')->get();
        return view('V_data_karyawan',['emp' => $karyawan]);
    }

    public function create()
    {
        return view('V_create_karyawan');
    }

    public function add(Request $request)
    {
        $karyawan = [
            'name' => $request->nama,
            'email'  => $request->email,
            'telepon'  => $request->telp,
            'alamat'  => $request->alamat,
            'jenis_kelamain'  => $request->gender,
            'tempat_lahir'  => $request->tempat,
            'tanggal_lahir'  => $request->tanggal
        ];

        M_karyawan::create($karyawan);
        return redirect('karyawan');
    }

    public function edit($id)
    {
        $karyawan = M_karyawan::select('*')->where('id', $id)->first();
        return view('V_edit_karyawan',['karyawan' => $karyawan]);
    }

    public function update(Request $request)
    {
        $karyawan = M_karyawan::select('*')->where('id', $request->id)->first();
        $karyawan->name = $request->nama;
        $karyawan->email = $request->email;
        $karyawan->telepon = $request->telp;
        $karyawan->alamat = $request->alamat;
        $karyawan->jenis_kelamin = $request->gender;
        $karyawan->tempat_lahir = $request->tempat;
        $karyawan->tanggal_lahir = $request->tanggal;
        $karyawan->save();
        return redirect('karyawan');
    }

    public function delete($id)
    {
        M_karyawan::where('id', $id)->delete();
        return redirect('/karyawan');
    }
}
