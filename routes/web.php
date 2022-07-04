<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin-dashboard');
    Route::get('/pelamar/datadiri', [App\Http\Controllers\Admin\DataDiriPelamarController::class, 'index'])->name('pelamar-datadiri');
    Route::get('/pelamar/datadiri/{dataDiri}', [App\Http\Controllers\Admin\DataDiriPelamarController::class, 'show'])->name('pelamar-datadiri.show');
    Route::delete('/pelamar/datadiri/{dataDiri}', [App\Http\Controllers\Admin\DataDiriPelamarController::class, 'destroy'])->name('pelamar-datadiri.destroy');
    Route::post('pelamar/datadiri/{dataDiri}', [App\Http\Controllers\Admin\DataDiriPelamarController::class, 'store_hasil'])->name('store_hasil');
    Route::post('pelamar/datadiri/gagal/{dataDiri}', [App\Http\Controllers\Admin\DataDiriPelamarController::class, 'store_hasil_gagal'])->name('store_hasil_gagal');
    Route::resource('/lowongan', App\Http\Controllers\Admin\LowonganController::class);
    Route::get('/hasil/lulus', [App\Http\Controllers\Admin\HasilController::class, 'hasil_lulus'])->name('hasil.lulus');
    Route::get('/hasil/tidaklulus', [App\Http\Controllers\Admin\HasilController::class, 'hasil_tidak_lulus'])->name('hasil_tidak_lulus');
    Route::delete('/hasil/{hasil}', [App\Http\Controllers\Admin\HasilController::class, 'destroy'])->name('hasil.destroy');
    Route::delete('/hasil/{dataDiri}/{id}', [App\Http\Controllers\Admin\DataDiriPelamarController::class, 'destroy_hasil'])->name('hasil.datadiri.destroy');
    Route::get('hasil/print', [App\Http\Controllers\Admin\HasilController::class, 'print'])->name('hasil.print');
});

Route::prefix('pelamar')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\Pelamar\DashboardController::class, 'index'])->name('pelamar-dashboard');
    Route::resource('/datadiri', App\Http\Controllers\Pelamar\DataDiriPelamarController::class)->except(['update']);
    Route::post('/datadiri/{id}', [App\Http\Controllers\Pelamar\DataDiriPelamarController::class, 'update'])->name('datadiri.update');
    Route::resource('/dokumen', App\Http\Controllers\Pelamar\UploadDokumenPelamarController::class)->except(['update']);
    Route::post('/dokumen/{dataDiri}', [App\Http\Controllers\Pelamar\UploadDokumenPelamarController::class, 'update'])->name('dokumen.update');
    Route::get('hasil/print', [App\Http\Controllers\Pelamar\DashboardController::class, 'print'])->name('pelamar.print');
});

Auth::routes();
