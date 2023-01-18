<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Http\Requests\VisitDokterStoreRequest;
use App\Http\Requests\VisitDokterUpdateRequest;
use App\Models\Dokter;
use App\Models\PasienRawatInap;
use App\Models\PinjamKamar;
use App\Models\Rujukan;
use Illuminate\Http\Request;
use App\Models\VisitDokter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class VisitDokterController extends Controller
{
    public function index()
    {
        // $data['items'] = VisitDokter::orderByDesc('created_at')->distinct('id_pasien_rawat_inap')->get();
        // $sub = VisitDokter::orderBy('created_at','DESC')->toSql();
        // dd($sub);
        // $data['items'] = VisitDokter::orderBy('created_at', 'desc')->groupBy('id_pasien_rawat_inap', )->get();
        // dd($data['items']);
        
        $pinjam_kamars = PinjamKamar::whereNotNull('tanggal_keluar')->get();
        $id_pasien = null;
        foreach ($pinjam_kamars as $key => $pinjam_kamar) {
            if($key+1 === count($pinjam_kamars)) {
                $id_pasien .= $pinjam_kamar->id_pasien_rawat_inap;
            } else {
                $id_pasien .= $pinjam_kamar->id_pasien_rawat_inap . ','; 
            }
        }

        if($id_pasien)
        {
            $data['items'] = DB::select("SELECT * FROM (SELECT * FROM visit_dokters GROUP BY id_pasien_rawat_inap DESC) AS vd 
            INNER JOIN dokters as d ON d.id = vd.id_dokter 
            LEFT JOIN pasien_rawat_inaps as pri ON pri.id = vd.id_pasien_rawat_inap WHERE vd.id_pasien_rawat_inap NOT IN ($id_pasien)
            ");
        } else {
            $data['items'] = DB::select("SELECT * FROM (SELECT * FROM visit_dokters GROUP BY id_pasien_rawat_inap DESC) AS vd 
            INNER JOIN dokters as d ON d.id = vd.id_dokter 
            LEFT JOIN pasien_rawat_inaps as pri ON pri.id = vd.id_pasien_rawat_inap");
        }
        

        return view('petugas.visitdokter.index')->with($data);
    }

    public function create()
    {
        $data['dokter'] = Dokter::all();
        $id_pasien = VisitDokter::pluck('id_pasien_rawat_inap')->all();
        $data['pasien'] = PasienRawatInap::whereNotIn('id', $id_pasien)->get();
        return view('petugas.visitdokter.create')->with($data);
    }

    public function store(VisitDokterStoreRequest $request)
    {
        $data = $request->all();
        VisitDokter::create($data);
        Session::flash('status', 'Data Berhasil Dimasukkan');
        return redirect()->route('petugas.visitdokter.index');
    }

    public function edit($pasien)
    {
        //Cari berdasarkan id rawat inap atau cek kondisi apakah id merupakan urutan paling bawah
        $data['item'] = VisitDokter::where('id_pasien_rawat_inap', $pasien)->get()->last();
        $data['visit_dokters'] = VisitDokter::where('id_pasien_rawat_inap', $pasien)->get();
        return view('petugas.visitdokter.edit')->with($data);
    }

    public function update(VisitDokterUpdateRequest $request, $pasien)
    {
        $data = $request->all();
        $item = VisitDokter::where('id_pasien_rawat_inap', $pasien)->first();
        $data['id_dokter'] = $item->id_dokter;
        $data['id_pasien_rawat_inap'] = $item->id_pasien_rawat_inap;
        VisitDokter::create($data);
        // $item->update($data);
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
