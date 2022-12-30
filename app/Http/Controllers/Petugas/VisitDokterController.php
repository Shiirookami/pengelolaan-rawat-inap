<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisitDokterController extends Controller
{
    public function index()
    {
        return view('petugas.visitdokter.index');
    }

    public function create()
    {
        return view('petugas.visitdokter.create');
    }
}