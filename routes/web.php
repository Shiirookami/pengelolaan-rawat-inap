<?php

use App\Http\Controllers\Petugas\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Petugas\KamarController;
use App\Http\Controllers\Petugas\DokterController;
use App\Http\Controllers\Petugas\PasienRawatInapController;
use App\Http\Controllers\Petugas\RujukanController;
use App\Http\Controllers\Petugas\VisitDokterController;
use App\Http\Controllers\Superadmin\DashboardController as SuperadminDashboardController;
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
// Route::get('/', function () {
//     return view('Home_welcome');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'middleware' => 'auth'
], function () {
    Route::group([
        'middleware' => 'role:admin',
        'prefix' => 'admin',
        'as' => 'admin.'
    ], function () {
        Route::get('/', [SuperadminDashboardController::class, 'index'])->name('dashboard.index');
        Route::get('/petugas', [PetugasController::class, 'index'])->name('petugas.index');
        Route::get('/petugas/status', [PetugasController::class, 'changeStatus'])->name('petugas.changeStatus');
        Route::delete('/petugas/{id}', [PetugasController::class, 'destroy'])->name('petugas.destroy');
    });
    Route::group([
        'middleware' => 'role:petugas',
        'prefix' => 'petugas',
        'as' => 'petugas.'
    ], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::resource('/kamar', KamarController::class);
        Route::resource('/dokter', DokterController::class);
        Route::resource('/pasienrawatinap', PasienRawatInapController::class);
        Route::resource('/visitdokter', VisitDokterController::class);

        Route::get('/rujukan', [RujukanController::class, 'index'])->name('rujukan.index');
        Route::get('/rujukan/create/{id?}', [RujukanController::class, 'create'])->name('rujukan.create');
        Route::post('/rujukan/store/', [RujukanController::class, 'store'])->name('rujukan.store');
        Route::get('/rujukan/print_pdf/{id}', [RujukanController::class, 'print_pdf'])->name('rujukan.print');
    });
});
