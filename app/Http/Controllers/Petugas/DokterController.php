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
        $request->validate([
            'no_identitas' => 'unique:dokters'
        ]);
        $data = $request->all();
        $jadwal = $request->input('hari_mulai') . " - " . $request->input('hari_berakhir') . " / " . $request->input('jam');
        $data['jadwal_dokter'] = $jadwal;
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
        $id = Dokter::where([
            ['no_identitas', $request->input('no_identitas')],
            ['id', $id]
        ])->first();
        if($id)
        {
            $id->update($data);
        } else {
            $request->validate([
                'no_identitas' => 'unique:dokters'
            ]);
            $id->update($data);
        }
        Session::flash('status', 'Data Berhasil Diubah');
        return redirect()->route('petugas.dokter.index');
    }

    public function destroy($id)
    {
        // Dokter::onlyTrashed()->findOrFail($id)->forceDelete();
        $dokter = Dokter::findOrFail($id);
        $dokter->delete();
        Session::flash('status', 'Data Berhasil Dihapus');
        return redirect()->route('petugas.dokter.index');
    }
}
