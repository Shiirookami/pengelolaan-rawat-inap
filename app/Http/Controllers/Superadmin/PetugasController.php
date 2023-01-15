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
        $data['petugas'] = User::where('roles_id', 2)->get();
        return view('superadmin.petugas.index')->with($data);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('status', 'Data Berhasil Dihapus');
        return redirect()->route('admin.petugas.index');
    }

    public function changeStatus(Request $request)
    {
        $request->validate([
            'status' => 'required|in:0,1'
        ]);
        $user = User::findOrFail($request->user_id);
        $user->status = $request->status;
        $user->save();
        return response()->json(['success'=>'Status Berhasil Dirubah']);
    }
}
