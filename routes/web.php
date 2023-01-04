<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Petugas\KamarController;
use App\Http\Controllers\Petugas\DokterController;
use App\Http\Controllers\Petugas\PasienRawatInapController;
use App\Http\Controllers\Petugas\RujukanController;
use App\Http\Controllers\Petugas\VisitDokterController;
use App\Http\Controllers\Superadmin\PetugasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    // 'middleware' => 'auth'
], function () {
    Route::group([
        'middleware' => 'role:admin',
        'prefix' => 'admin',
        'as' => 'admin.'
    ], function () {
        Route::get('/', [PetugasController::class, 'index'])->name('petugas.index');
        Route::put('/petugas/status/{id}', [PetugasController::class, 'updateStatus'])->name('petugas.updateStatus');
        Route::delete('/petugas/{id}', [PetugasController::class, 'destroy'])->name('petugas.destroy');
    });
    Route::group([
        'middleware' => 'role:petugas',
        'prefix' => 'petugas',
        'as' => 'petugas.'
    ], function () {
        Route::resource('/kamar', KamarController::class);
        Route::resource('/dokter', DokterController::class);
        Route::resource('/pasienrawatinap', PasienRawatInapController::class);
        Route::resource('/visitdokter', VisitDokterController::class);
        Route::resource('/rujukan', RujukanController::class);
    });
});