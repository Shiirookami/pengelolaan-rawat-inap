<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Http\Requests\KamarRequest;
use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KamarController extends Controller
{
    public function index()
    {
        $items = Kamar::all();
        return view('petugas.kamar.index')->with(compact('items'));
    }

    public function create()
    {
        $items = Kamar::all();
        return view('petugas.kamar.create')->with(compact('items'));
    }

    public function store(KamarRequest $request)
    {
        $data = $request->all();
        Kamar::create($data);
        Session::flash('status', 'Data Berhasil Dimasukkan');
        return redirect()->route('petugas.kamar.index');
    }

    public function show(Kamar $kamar)
    {
        //
    }

    public function edit($id)
    {
        $item = Kamar::findOrFail($id);
        return view('petugas.kamar.edit')->with([
            'item' => $item
        ]);
    }

    public function update(KamarRequest $request, $id)
    {
        $data = $request->all();
        $item = Kamar::findOrFail($id);
        $item->update($data);
        Session::flash('status', 'Data Berhasil Diubah');
        return redirect()->route('petugas.kamar.index');
    }

    public function destroy($id)
    {
        Kamar::onlyTrashed()->findOrFail($id)->forceDelete();
        Session::flash('status', 'Data Berhasil Dihapus');
        return redirect()->route('petugas.kamar.index');
    }
}
