<?php
use App\Models\suratmasuk;

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});
// Route::get('/masuk', function () {
//     return view('suratmasuk');
// });

// Route::get('/keluar', function () {
//     return view('suratkeluar');
// });
Route::get('/kategori', function () {
    return view('Kategorisurat');
});

Route::get('/masuk',[SuratMasukController::class,'index'])->name('suratmasuk');
Route::get('/keluar',[SuratKeluarController::class,'index'])->name('suratkeluar');
Route::get('/tambahmasuk',[SuratMasukController::class,'tambahmasuk'])->name('tambahmasuk');
Route::post('/insertdata',[SuratMasukController::class,'insertdata'])->name('insertdata');
Route::get('/tambahkeluar',[SuratKeluarController::class,'tambahkeluar'])->name('tambahkeluar');
Route::post('/insertdata1',[SuratKeluarController::class,'insertdata1'])->name('insertdata1');
Route::get('/tampilkandata/{id}',[SuratMasukController::class,'tampilkandata'])->name('tampilkandata');
Route::get('/tampilkandatakeluar/{id}',[SuratKeluarController::class,'tampilkandatakeluar'])->name('tampilkandatakeluar');
Route::Post('/updatemasuk/{id}',[SuratMasukController::class,'updatemasuk'])->name('updatemasuk');
Route::get('/tampilmasuk/{id}',[SuratMasukController::class,'tampilmasuk'])->name('tampilmasuk');
Route::get('/delete/{id}',[SuratMasukController::class, 'delete'])->name('delete');
Route::get('/delete1/{id}',[SuratKeluarController::class, 'delete1'])->name('delete1');
Route::Post('/updatekeluar/{id}',[SuratKeluarController::class,'updatekeluar'])->name('updatekeluar');
Route::get('/tampilkeluar/{id}',[SuratKeluarController::class,'tampilkeluar'])->name('tampilkeluar');





 
