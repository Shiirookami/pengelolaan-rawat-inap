<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Http\Requests\VisitDokterStoreRequest;
use App\Http\Requests\VisitDokterUpdateRequest;
use App\Models\Dokter;
use App\Models\PasienRawatInap;
use Illuminate\Http\Request;
use App\Models\VisitDokter;
use Illuminate\Support\Facades\Session;

class VisitDokterController extends Controller
{
    public function index()
    {
        $data['items'] = VisitDokter::orderByDesc('created_at')->distinct('id_pasien_rawat_inap')->get();
        return view('petugas.visitdokter.index')->with($data);
    }

    public function create()
    {
        $data['dokter'] = Dokter::all();
        $data['visit'] = PasienRawatInap::all();
        return view('petugas.visitdokter.create')->with($data);
    }

    public function store(VisitDokterStoreRequest $request)
    {
        $data = $request->all();
        VisitDokter::create($data);
        Session::flash('status', 'Data Berhasil Dimasukkan');
        return redirect()->route('petugas.visitdokter.index');
    }

    public function edit($id)
    {
        //Cari berdasarkan id rawat inap atau cek kondisi apakah id merupakan urutan paling bawah
        $data['item'] = VisitDokter::findOrFail($id);
        return view('petugas.visitdokter.edit')->with($data);
    }

    public function update(VisitDokterUpdateRequest $request, $id)
    {
        $data = $request->all();
        $item = VisitDokter::findOrFail($id);
        $item->update($data);
        Session::flash('status', 'Data Berhasil Diubah');
        return redirect()->route('petugas.visitdokter.index');
    }

    public function destroy($id)
    {
        // VisitDokterUpdateRequest::onlyTrashed()->findOrFail($id)->forceDelete();
        $visit_dokter = VisitDokter::findOrFail($id);
        $visit_dokter -> delete();
        Session::flash('status', 'Data Berhasil Dihapus');
        return redirect()->route('petugas.visitdokter.index');
    }
}
