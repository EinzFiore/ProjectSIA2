<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BarangController extends Controller
{
    public function index()
    {
        $barang = \App\Barang::All();
        return view('admin.barang.barang', ['barang' => $barang]);
    }

    public function create()
    {
        return view('admin.barang.input');
    }

    public function store(Request $request)
    {
        $tambah_barang = new \App\Barang;
        $tambah_barang->kd_brg = $request->addkdbrg;
        $tambah_barang->nm_brg = $request->addnmbrg;
        $tambah_barang->harga = $request->addharga;
        $tambah_barang->stok = $request->addstok;
        $tambah_barang->save();
        Alert::success('Pesan ', 'Data berhasil disimpan');
        return redirect('/barang');
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('admin.barang.editBarang', ['barang' => $barang]);
    }

    public function update($id, Request $request)
    {
        $barang = Barang::findOrFail($id);
        $barang->kd_brg = $request->addkdbrg;
        $barang->nm_brg = $request->addnmbrg;
        $barang->harga = $request->addharga;
        $barang->stok = $request->addstok;
        $barang->save();
        Alert::success('Pesan ', 'Data berhasil diupdate');
        return redirect('/barang');
    }

    public function destroy($kd_brg)
    {
        $barang = \App\Barang::findOrFail($kd_brg);
        $barang->delete();
        Alert::success('Pesan ', 'Data berhasil dihapus');
        return redirect()->route('barang.index');
    }

}