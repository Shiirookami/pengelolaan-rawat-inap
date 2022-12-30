<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class PetugasController extends Controller
{
    public function index()
    {
        $data['items'] = User::all();
        return view('superadmin.petugas.index')->with($data);
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:0,1'
        ]);
        $petugas = User::findOrFail($id);
        $petugas->status = $request->status;
        $petugas->save();
        return response()->json(['success' => 'Status change successfully.']);
    }

    public function destroy($id)
    {
        User::onlyTrashed()->findOrFail($id)->forceDelete();
        Session::flash('status', 'Data Berhasil Dihapus');
        return redirect()->route('superadmin.petugas.index');
    }
}
