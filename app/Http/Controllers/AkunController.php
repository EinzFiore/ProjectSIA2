<?php

namespace App\Http\Controllers;

use App\Akun;
use App\Setting;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AkunController extends Controller
{
    public function index()
    {
        $akun = Akun::All();
        return view('admin.akun.akun', ['akun' => $akun]);
    }

    public function create()
    {
        return view('admin.akun.input');
    }

    public function store(Request $request)
    {
        $tambah_akun = new Akun;
        $tambah_akun->no_akun = $request->no_akun;
        $tambah_akun->nm_akun = $request->nm_akun;
        $tambah_akun->save();
        Alert::success('Pesan ', 'Data berhasil disimpan');
        return redirect('/akun');
    }

    public function show($id)
    {
        $settings = Setting::all();
        return view('admin.akun.settings', ['settings' => $settings]);
    }

    public function edit($id)
    {
        $akun = Akun::findOrFail($id);
        return view('admin.akun.editAkun', ['akun' => $akun]);
    }

    public function update($id, Request $request)
    {
        $akun = Akun::findOrFail($id);
        $akun->no_akun = $request->no_akun;
        $akun->nm_akun = $request->nm_akun;
        $akun->save();
        Alert::success('Pesan ', 'Data berhasil diupdate');
        return redirect('/akun');
    }

    public function destroy($kd_akun)
    {
        $akun = Akun::findOrFail($kd_akun);
        $akun->delete();
        Alert::success('Pesan ', 'Data berhasil dihapus');
        return redirect()->route('akun.index');
    }
}