<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\PinjamKamar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PinjamKamarController extends Controller
{
    public function index()
    {
        $data['items'] = PinjamKamar::whereNull('tanggal_keluar')->get();
        return view('petugas.pinjamkamar.index')->with($data);
    }
    public function update($id)
    {
        $data['tanggal_keluar'] = Carbon::now()->toDateTimeString();
        $item = PinjamKamar::findOrFail($id);
        $item->update($data);
        Session::flash('status', 'Data Berhasil Diubah');
        return redirect()->route('petugas.pinjamkamar.index');
    }
}
