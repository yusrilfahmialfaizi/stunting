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

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/peta-sebaran', [PetasebaranController::class, 'index']);
Route::get('/zscore', [KlasifikasiController::class, 'index']);
Route::post('/perhitungan_zscore', [KlasifikasiController::class, 'zscore']);
Route::get('/data_bbu', [DataBBpUController::class, 'index']);
Route::get('/data_tbu', [DataTBpUController::class, 'index']);
Route::get('/data_bbtb', [DataBBpTBController::class, 'index']);
Route::get('/data_imtu', [DataIMTpUController::class, 'index']);
Route::get('/data_anak', [DataAnakController::class, 'index']);
