<?php

use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\KurirController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProduksController;
use App\Models\keranjang;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/jenis', function () {
    return view('jenis');
});
Route::get('/berita', function () {
    return view('berita');
});

Route::resource('keranjang',KeranjangController::class);
Route::resource('toko',ProduksController::class);
Route::resource('pesanan',PesananController::class);
Route::get('post/hapus/{id}', 'App\Http\Controllers\PesananController@hapus');
// Route::get('keranjang/kurir/{kurir}','App\Http\Controllers\KeranjangController@index');
