<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SupplierController extends Controller
{
    public function index()
    {
        $supplier = \App\Supplier::All();
        return view('admin.supplier.supplier', ['supplier' => $supplier]);
    }

    public function create()
    {
        return view('admin.supplier.input');
    }

    public function store(Request $request)
    {
        $supplier = new \App\Supplier;
        $supplier->kd_supp = $request->kd_supp;
        $supplier->nm_supp = $request->nm_supp;
        $supplier->alamat = $request->alamat;
        $supplier->telepon = $request->telepon;
        $supplier->save();
        Alert::success('Pesan ', 'Data berhasil disimpan');
        return redirect('/supplier');
    }

    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('admin.supplier.editSupplier', ['supplier' => $supplier]);
    }

    public function update($id, Request $request)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->kd_supp = $request->kd_supp;
        $supplier->nm_supp = $request->nm_supp;
        $supplier->alamat = $request->alamat;
        $supplier->telepon = $request->telepon;
        $supplier->save();
        Alert::success('Pesan ', 'Data berhasil diupdate');
        return redirect('/supplier');
    }

    public function destroy($kd_supp)
    {
        $barang = \App\Supplier::findOrFail($kd_supp);
        $barang->delete();
        Alert::success('Pesan ', 'Data berhasil dihapus');
        return redirect()->route('supplier.index');
    }
}