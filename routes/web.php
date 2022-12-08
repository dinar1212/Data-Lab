<?php
use App\Http\Controllers\TambahadminController;
use App\Http\Controllers\Ket_labController;
use App\Http\Controllers\Kel_labController;
use App\Http\Controllers\Jad_labController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KomputerController;
use App\Http\Controllers\Data_barangController;
use App\Http\Controllers\Data_peminjamanController;
use App\Http\Controllers\Data_perbaikanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\Laporan_perbaikanController;
use App\Http\Controllers\Laporan_barangController;
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
    return view('auth.login');
});

Route::get('/admin', function () {
    return view('layouts.admin');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route 
Route::resource('tambahadmin', TambahadminController::class);
Route::resource('ket_lab', Ket_labController::class);
Route::resource('jad_lab', Jad_labController::class);
Route::resource('kel_lab', Kel_labController::class);
Route::resource('user', UserController::class);
Route::resource('komputer', KomputerController::class);

//route
Route::resource('data_barang', Data_barangController::class);
Route::resource('data_peminjaman', Data_peminjamanController::class);
Route::resource('data_perbaikan', Data_perbaikanController::class);
Route::resource('laporan', LaporanController::class);
Route::resource('laporan_perbaikan', Laporan_perbaikanController::class);
Route::resource('laporan_barang', Laporan_barangController::class);
