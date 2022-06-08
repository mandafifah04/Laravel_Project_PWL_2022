<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
})->middleware(['guest']);

Route::middleware(['auth'])->group(function(){
	Route::get('/home', 'HomeController@index')->name('home.index');
});

//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('siswa')
->middleware(['auth', 'role:siswa'])
->group(function(){
	Route::get('pembayaran-spp', 'SiswaController@pembayaranSpp')->name('siswa.pembayaran-spp');
	Route::get('pembayaran-spp/{spp:tahun}', 'SiswaController@pembayaranSppShow')->name('siswa.pembayaran-spp.pembayaranSppShow');
	Route::get('history-pembayaran', 'SiswaController@historyPembayaran')->name('siswa.history-pembayaran');
	Route::get('history-pembayaran/preview/{id}', 'SiswaController@previewHistoryPembayaran')->name('siswa.history-pembayaran.preview');
	Route::get('laporan-pembayaran', 'SiswaController@laporanPembayaran')->name('siswa.laporan-pembayaran');
	Route::post('laporan-pembayaran', 'SiswaController@printPdf')->name('siswa.laporan-pembayaran.print-pdf');
});
