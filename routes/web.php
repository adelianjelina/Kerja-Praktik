<?php

use App\Http\Controllers\KlasifikasiController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratMasukController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//klasifikasi
Route::get('klasifikasi', [KlasifikasiController::class, 'index'])->name('klasifikasi.index');
Route::get('klasifikasi/create', [KlasifikasiController::class, 'create'])->name('klasifikasi.create');
Route::post('klasifikasi/store', [KlasifikasiController::class, 'store'])->name('klasifikasi.store');


//surat masuk
Route::get('surat-masuk', [SuratMasukController::class, 'index'])->name('surat-masuk.index');
Route::get('surat-masuk/create', [SuratMasukController::class, 'create'])->name('surat-masuk.create');
Route::post('surat-masuk/store', [SuratMasukController::class, 'store'])->name('surat-masuk.store');
Route::get('surat-masuk/show/{suratMasuk}', [SuratMasukController::class, 'show'])->name('surat-masuk.show');

//surat keluar
Route::get('surat-keluar', [SuratKeluarController::class, 'index'])->name('surat-keluar.index');
Route::get('surat-keluar/create', [SuratKeluarController::class, 'create'])->name('surat-keluar.create');
Route::post('surat-keluar/store', [SuratKeluarController::class, 'store'])->name('surat-keluar.store');
Route::get('surat-keluar/show/{suratKeluar}', [SuratKeluarController::class, 'show'])->name('surat-keluar.show');

require __DIR__ . '/auth.php';
