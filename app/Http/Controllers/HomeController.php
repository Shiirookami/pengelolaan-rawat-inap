<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Kamar;
use App\Models\PasienRawatInap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // auth()->logout();

        // if(Auth::user()->roles_id == 1){
        //     return redirect()->route('admin.dashboard.index');
        // } else if(Auth::user()->roles_id == 2) {
        //     if(Auth::user()->status == 1){
        //         return redirect()->route('petugas.dashboard.index');
        //     } else {
        //         // auth()->logout();
        //         Session::flash('status', 'Email Belum Diverifikasi');
        //         return redirect()->route('login');
        //     }
        // }
    }

    public function home()
    {
        $data['pasien'] = PasienRawatInap::count();
        $data['kamar'] = Kamar::count();
        $data['dokter'] = Dokter::count();
        return view('home')->with($data);
    }
}
