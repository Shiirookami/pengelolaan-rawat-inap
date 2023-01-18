<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Http\Requests\RujukanRequest;
use App\Models\PasienRawatInap;
use App\Models\Rujukan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PDF;

class RujukanController extends Controller
{
    public function index()
    {
        $data['rujukans'] = Rujukan::all();
        return view('petugas.rujukan.index')->with($data);
    }

    public function create($id = null)
    {
        if($id)
        {
            $data['pasien'] = PasienRawatInap::findOrFail($id);
            $data['id_pasien'] = true;
        } else {
            // $id_pasien = Rujukan::pluck('id_pasien_rawat_inap')->all();
            // $data['pasiens'] = PasienRawatInap::whereNotIn('id', $id_pasien)->get();
            $data['id_pasien'] = false;
        }
        return view('petugas.rujukan.create')->with($data);
    }

    public function store(RujukanRequest $request)
    {
        $data = $request->all();
        if($request->input('id_pasien_rawat_inap'))
        {
            $pasien = PasienRawatInap::findOrFail($request->input('id_pasien_rawat_inap'));
            $data['no_identitas'] = $pasien->no_identitas;
            $data['nama_pasien'] = $pasien->nama_lengkap;
            $data['tanggal_lahir'] = $pasien->tanggal_lahir;
            $data['alamat'] = $pasien->alamat;
        } else {
            $request->validate([
                'no_identitas' => ['required'],
                'nama_pasien' => ['required'],
                'tanggal_lahir' => ['required'],
                'alamat' => ['required'],
            ]);
        }
        Rujukan::create($data);
        Session::flash('status', 'Data Berhasil Dimasukkan');
        return redirect()->route('petugas.rujukan.index');
    }

    public function print_pdf($id)
    {
        $data['rujukan'] = Rujukan::findOrFail($id);
        $pdf = PDF::loadview('petugas.rujukan.report', $data);
    	return $pdf->download('rujukan_' . $data['rujukan']->nama_pasien . '.pdf');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['rujukans'] = Rujukan::findOrFail($id);
        $data['pasiens'] = PasienRawatInap::all();
        return view('petugas.rujukan.edit')->with($data);
    }

    public function update(RujukanRequest $request, $id)
    {
        $data = $request->all();
        $rujukan = Rujukan::findOrFail($id);
        $rujukan->update($data);
        Session::flash('status', 'Data Berhasil Diubah');
        return redirect()->route('petugas.rujukan.index');
    }

    public function destroy($id)
    {
        $rujukan = Rujukan::findOrFail($id);
        $rujukan->delete();
        Session::flash('status', 'Data Berhasil Dihapus');
        return redirect()->route('petugas.rujukan.index');
    }
}
