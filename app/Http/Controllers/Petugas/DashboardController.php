<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use Illuminate\Http\Request;
use App\Models\Kamar;

class DashboardController extends Controller
{
    public function index()
    {
        $data['kamars'] = Kamar::all();
        $data['dokters'] = Dokter::all();
        return view('petugas.index')->with($data);
    }
}
