<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\PimpinanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisLayananController;
use App\Http\Controllers\JenisPembayaranController;

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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/dashboard', DashboardController::class,['expect' =>['show']]);
Route::resource('/konsumen', KonsumenController::class,['expect' =>['show']]);
Route::resource('/jenis-pembayaran', JenisPembayaranController::class,['expect' =>['show']]);
Route::resource('/jenis-layanan', JenisLayananController::class,['expect' =>['show']]);
Route::resource('/order', OrderController::class,['expect' =>['show']]);

Route::resource('/pimpinan', PimpinanController::class,['expect' =>['show']]);
Route::resource('/petugas', PetugasController::class,['expect' =>['show']]);