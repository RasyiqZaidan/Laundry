<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryOrderController;
use App\Http\Controllers\JenisPembayaranController;
use App\Http\Controllers\JenisLayananController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PemimpinController;
use App\Http\Controllers\TransaksiOrderController;

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

Route::get('/', [MainController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/petugas', [PetugasController::class, 'index']);

Route::get('/history-order', [HistoryOrderController::class, 'index']);

Route::get('/transaksi-order', [TransaksiOrderController::class, 'index']);
Route::get('/transaksi-order/casier/{id}', [TransaksiOrderController::class, 'casier'])->name('transaksi-order.casier');
Route::get('/transaksi-order/detailOrder/{id_jns_layanan}/{total_berat}', [TransaksiOrderController::class, 'detailOrder'])->name('transaksi-order.detailOrder');
Route::post('/transaksi-order/casier/store', [TransaksiOrderController::class, 'store'])->name('transaksi-order.store');
Route::put('/transaksi-order/update/{id}', [TransaksiOrderController::class, 'update'])->name('transaksi-order.update');
Route::delete('/transaksi-order/delete/{id}', [TransaksiOrderController::class, 'destroy'])->name('transaksi-order.destroy');



Route::get('/jenis-pembayaran', [JenisPembayaranController::class, 'index']);
Route::post('/jenis-pembayaran/store', [JenisPembayaranController::class, 'store'])->name('jenis-pembayaran.store');
Route::put('/jenis-pembayaran/update/{id}', [JenisPembayaranController::class, 'update'])->name('jenis-pembayaran.update');
Route::delete('/jenis-pembayaran/delete/{id}', [JenisPembayaranController::class, 'destroy'])->name('jenis-pembayaran.destroy');

Route::resource('/jenis-layanan', JenisLayananController::class, ['expect' => ['show']]);

Route::resource('/konsumen', KonsumenController::class, ['expect' => ['show']]);

Route::get('/petugas', [PetugasController::class, 'index']);
Route::post('/petugas/store', [PetugasController::class, 'store'])->name('petugas.store');
Route::put('/petugas/update/{id}', [PetugasController::class, 'update'])->name('petugas.update');
Route::delete('/petugas/delete/{id}', [PetugasController::class, 'destroy'])->name('petugas.delete');

Route::get('/pemimpin', [PemimpinController::class, 'index']);
Route::post('/pemimpin/store', [PemimpinController::class, 'store'])->name('pemimpin.store');
Route::put('/pemimpin/update/{id}', [PemimpinController::class, 'update'])->name('pemimpin.update');
Route::delete('/pemimpin/delete/{id}', [PemimpinController::class, 'destroy'])->name('pemimpin.delete');

