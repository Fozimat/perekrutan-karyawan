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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin-dashboard');
    Route::get('/pelamar/datadiri', [App\Http\Controllers\Admin\DataDiriPelamarController::class, 'index'])->name('pelamar-datadiri');
    Route::get('/pelamar/datadiri/{dataDiri}', [App\Http\Controllers\Admin\DataDiriPelamarController::class, 'show'])->name('pelamar-datadiri.show');
});

Route::prefix('pelamar')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\Pelamar\DashboardController::class, 'index'])->name('pelamar-dashboard');
    Route::resource('/datadiri', App\Http\Controllers\Pelamar\DataDiriPelamarController::class)->except(['update']);
    Route::post('/datadiri/{id}', [App\Http\Controllers\Pelamar\DataDiriPelamarController::class, 'update'])->name('datadiri.update');
    Route::resource('/dokumen', App\Http\Controllers\Pelamar\UploadDokumenPelamarController::class)->except(['update']);
    Route::post('/dokumen/{id}', [App\Http\Controllers\Pelamar\UploadDokumenPelamarController::class, 'update'])->name('dokumen.update');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
