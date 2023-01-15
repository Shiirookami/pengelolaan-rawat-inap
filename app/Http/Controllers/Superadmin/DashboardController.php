<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data['kamars'] = DB::table('kamars')
                     ->select(DB::raw('count(*) as nama_kamar, kelas'))
                     ->where('kelas', '<>', 1)
                     ->groupBy('kelas')
                     ->get();
        return view('Superadmin.index')->with($data);
    }
}
