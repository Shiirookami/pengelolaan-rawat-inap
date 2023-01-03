<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Http\Requests\DokterRequest;
use App\Models\Dokter;
use Illuminate\Support\Facades\Session;

class DokterController extends Controller
{
    public function index()
    {
        $data['items'] = Dokter::all();
        return view('petugas.dokter.index')->with($data);
    }

    public function create()
    {
        return view('petugas.dokter.create');
    }

    public function store(DokterRequest $request)
    {
        $data = $request->all();
        Dokter::create($data);
        Session::flash('status', 'Data Berhasil Dimasukkan');
        return redirect()->route('petugas.dokter.index');
    }

    public function show(Dokter $dokter)
    {
        //
    }

    public function edit($id)
    {
        $data['item'] = Dokter::findOrFail($id);
        return view('petugas.dokter.edit')->with($data);
    }

    public function update(DokterRequest $request, $id)
    {
        $data = $request->all();
        $item = Dokter::findOrFail($id);
        $item->update($data);
        Session::flash('status', 'Data Berhasil Diubah');
        return redirect()->route('petugas.dokter.index');
    }

    public function destroy($id)
    {
        // Dokter::onlyTrashed()->findOrFail($id)->forceDelete();
        $dokter = Dokter::findOrFail($id);
        $dokter->delete();
        Session::flash('status', 'Data Berhasil Dihapus');
        return redirect()->route('petugas.kamar.index');
    }
}
