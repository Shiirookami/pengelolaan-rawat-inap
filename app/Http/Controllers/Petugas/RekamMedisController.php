<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\PinjamKamar;
use App\Models\VisitDokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PDF;
class RekamMedisController extends Controller
{
    public function index()
    {
        $data['items'] = PinjamKamar::whereNotNull('tanggal_keluar')->get();
        return view('petugas.rekammedis.index')->with($data);
    }

    public function detail($id)
    {
        $data['pinjamkamar'] = PinjamKamar::where('id_pasien_rawat_inap', $id)->first();
        $data['visitdokter'] = VisitDokter::where('id_pasien_rawat_inap', $id)->get();
        return view('petugas.rekammedis.detail')->with($data);
    }

    public function print(Request $request, $id)
    {
        $data['pinjamkamar'] = PinjamKamar::where('id_pasien_rawat_inap', $id)->first();
        $data['visitdokter'] = VisitDokter::where('id_pasien_rawat_inap', $id)->get();
        $status_asuransi = $data['pinjamkamar']->pasien->status_asuransi;
        
        if($status_asuransi == 'UMUM'){
            Validator::make($request->all(), [
                'biaya_perawatan' => 'required|integer',
            ])->validate();
            $data['biaya_perawatan'] = $request->input('biaya_perawatan');
        } else {
            $data['biaya_perawatan'] = 0;
        }

        $date1 = $data['pinjamkamar']->tanggal_masuk;
        $date2 = $data['pinjamkamar']->tanggal_keluar;
        $difference = strtotime($date2) - strtotime($date1);
        $range = $difference / (24 * 60 * 60);

        $data['durasi'] = $range == 0 ? 1 : $range;
        $data['harga_kamar'] = $data['pinjamkamar']->kamar->harga * $data['durasi'];
        $data['total_bayar'] = $data['harga_kamar'] + $data['biaya_perawatan'];
        // return  view('petugas.rekammedis.report', $data);
        $pdf = PDF::loadview('petugas.rekammedis.report', $data);
        return $pdf->download('rekam_medis_' . $data['pinjamkamar']->pasien->nama_lengkap . '.pdf');
        // return redirect()->route('petugas.rekammedis.index');
    }
}
