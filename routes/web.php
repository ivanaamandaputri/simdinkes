<?php

use App\Http\Controllers\BbmController;
use App\Http\Controllers\JadwalKadisController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::resource('user', UserController::class);
Route::resource('kendaraan', KendaraanController::class);
Route::resource('jadwalkadis', JadwalKadisController::class);
Route::resource('pegawai', PegawaiController::class);
Route::resource('bbm', BbmController::class);