<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Kamar;
use App\Models\PasienRawatInap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PasienRawatInapController extends Controller
{
    public function index()
    {
        $items = PasienRawatInap::all();
        return view('petugas.pasienrawatinap.index')->with(compact('items'));
    }

    public function create()
    {
        $kamars = Kamar::all();
        return view('petugas.pasienrawatinap.create')->with(compact('kamars'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        PasienRawatInap::create($data);
        Session::flash('status', 'Data Berhasil Dimasukkan');
        return redirect()->route('petugas.pasienrawatinap.index');
    }

    public function show(PasienRawatInap $pasienRawatInap)
    {
        //
    }

    public function edit($id)
    {
        $item = PasienRawatInap::findOrFail($id);
        $kamars = Kamar::all();
        return view('petugas.pasienrawatinap.edit')->with(compact('item', 'kamars'));
    }

    public function update(PasienRawatInap $request, $id)
    {
        $data = $request->all();
        $item = PasienRawatInap::findOrFail($id);
        $item->update($data);
        Session::flash('status', 'Data Berhasil Diubah');
        return redirect()->route('petugas.pasienrawatinap.index');
    }

    public function destroy($id)
    {
        PasienRawatInap::onlyTrashed()->findOrFail($id)->forceDelete();
        Session::flash('status', 'Data Berhasil Dihapus');
        return redirect()->route('petugas.pasienrawatinap.index');
    }
}
