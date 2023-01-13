<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasienRawatInapRequest;
use App\Models\Kamar;
use App\Models\PasienRawatInap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PasienRawatInapController extends Controller
{
    public function index()
    {
        $data['items'] = PasienRawatInap::all();
        return view('petugas.pasienrawatinap.index')->with($data);
    }

    public function create()
    {
        $data['kamars'] = Kamar::all();
        return view('petugas.pasienrawatinap.create')->with($data);
    }

    public function store(PasienRawatInapRequest $request)
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
        $data['item'] = PasienRawatInap::findOrFail($id);
        $data['kamars'] = Kamar::all();
        return view('petugas.pasienrawatinap.edit')->with($data);
    }

    public function update(PasienRawatInapRequest $request, $id)
    {
        $data = $request->all();
        $item = PasienRawatInap::findOrFail($id);
        $item->update($data);
        Session::flash('status', 'Data Berhasil Diubah');
        return redirect()->route('petugas.pasienrawatinap.index');
    }

    public function destroy($id)
    {
        // PasienRawatInap::onlyTrashed()->findOrFail($id)->forceDelete();
        $pasien = PasienRawatInap::findOrFail($id);
        $pasien->delete();
        Session::flash('status', 'Data Berhasil Dihapus');
        return redirect()->route('petugas.pasienrawatinap.index');
    }
}
