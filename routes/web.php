<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KetuController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\TahunController;
use App\Http\Controllers\BioController;
use App\Http\Controllers\ActionController;



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

Route::get('/', [AuthController::class, 'index']);
Route::post('/auth', [AuthController::class, 'auth']);


Route::get('/NAILUL-HUDA/dashboard', [DashboardController::class, 'index']);
Route::resource('/NAILUL-HUDA/kegiatan', KegiatanController::class);
Route::resource('/NAILUL-HUDA/ketu', KetuController::class);
Route::resource('/NAILUL-HUDA/kelas', KelasController::class);
Route::resource('/NAILUL-HUDA/jurusan', JurusanController::class);
Route::resource('/NAILUL-HUDA/pengurus', PengurusController::class);
Route::resource('/NAILUL-HUDA/tahun', TahunController::class);
Route::resource('/NAILUL-HUDA/bio', BioController::class);

Route::get('/NAILUL-HUDA/pemasukan', [ActionController::class, 'index']);
Route::post('/proses', [ActionController::class, 'proses']);
Route::post('/sukses/{id}', [ActionController::class, 'sukses']);
Route::post('/hapus/{id}', [ActionController::class, 'proses']);
Route::get('/NAILUL-HUDA/dataConfirm', [ActionController::class, 'konfirm']);