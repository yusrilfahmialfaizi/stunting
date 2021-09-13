<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PetasebaranController;
use App\Http\Controllers\KlasifikasiController;
use App\Http\Controllers\DataBBpUController;
use App\Http\Controllers\DataTBpUController;
use App\Http\Controllers\DataBBpTBController;
use App\Http\Controllers\DataIMTpUController;
use App\Http\Controllers\DataAnakController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataZscoreController;
use App\Http\Controllers\DesaController;

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

Route::get('/', [DashboardController::class, 'landingpage']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/auth', [LoginController::class, 'auth']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard-admin', [DashboardController::class, 'dashboard']);
Route::get('/data-riwayat', [DataZscoreController::class, 'index']);
Route::get('/peta-sebaran', [PetasebaranController::class, 'index']);
Route::get('/peta-sebaran-stunting', [PetasebaranController::class, 'peta']);
Route::get('/zscore', [KlasifikasiController::class, 'index']);
Route::post('/perhitungan_zscore', [KlasifikasiController::class, 'zscore']);
Route::get('/data_bbu', [DataBBpUController::class, 'index']);
Route::get('/data_tbu', [DataTBpUController::class, 'index']);
Route::get('/data_bbtb', [DataBBpTBController::class, 'index']);
Route::get('/data_imtu', [DataIMTpUController::class, 'index']);
Route::get('/tambah_user', [DataUserController::class, 'tambah_user']);
Route::get('/tambah_anak', [DataAnakController::class, 'tambah_anak']);
Route::post('/simpan_anak', [DataAnakController::class, 'simpan']);
Route::post('/get_anak', [KlasifikasiController::class, 'ajax_get']);
Route::post('/simpan_data', [KlasifikasiController::class, 'simpan_data']);

Route::resource('data-anak', DataAnakController::class);
Route::resource('data-user', DataUserController::class);
Route::resource('data-desa', DesaController::class);
