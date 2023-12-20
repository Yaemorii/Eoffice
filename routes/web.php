<?php

use App\Http\Controllers\DetailSasaranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\IndikatorController;
use App\Http\Controllers\IndikatorSasaranController;
use App\Http\Controllers\TujuanController;
use App\Http\Controllers\SasaranController;
use App\Models\Indikator;
use App\Models\Sasaran;
use App\Models\Tujuan;

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
    return redirect()->route('login'); 
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Lupa Password
Route::get('/forgot-password', [ForgotPasswordController::class, 'showForm'])->name('forgot-password.form');
Route::post('/forgot-password', [ForgotPasswordController::class, 'processForm'])->name('forgot-password.process');

Route::middleware(['auth'])->group(function () {
    Route::get('/visimisi', [VisiController::class, 'index'])->name('visimisi');
});

Route::get('halaman/visimisi', function () {
    return view('halaman.visimisi');
});

Route::get('halaman/sasaran', function () {
    return view('halaman.sasaran');
});

Route::get('halaman/detailsasaran', function () {
    return view('halaman.detailsasaran');
});


//VISI
Route::get('/visimisi', [VisiController::class, 'index'])->name('visimisi');
Route::put('/visimisi-update/{id}', [VisiController::class, 'update']);
Route::put('/visis', [VisiController::class, 'store'])->name('visi.store');
Route::get('/visi/{id}', [VisiController::class, 'show']);

//MISI
Route::get('/misi/{id}', [MisiController::class, 'index']);
Route::post('/misi-store', [MisiController::class, 'store']);
Route::get('misi/edit/{id}', [MisiController::class], 'edit');
Route::put('misi/update/{id}', [MisiController::class, 'update']);
Route::get('/hapus/misi/{id}', [MisiController::class, 'destroy'])->name('hapus');
//INDIKATOR
Route::post('/indikator-store/{id}', [IndikatorController::class, 'store']);
Route::put('/indikator-update/{id}', [IndikatorController::class, 'update']);
Route::get('/hapus/indikator/{id}', [IndikatorController::class, 'destroy'])->name('hapus');
//INDIKATOR SASARAN 
Route::post('/indikatorsasaran-store/{id}', [IndikatorSasaranController::class, 'store']);
Route::put('/indikatorsasaran-update/{id}', [IndikatorSasaranController::class, 'update']);
Route::delete('/hapus-indikatorsasaran/{id}', [IndikatorSasaranController::class, 'destroy'])->name('hapus');
//TUJUAN
Route::post('/tujuan-store/{id}', [TujuanController::class, 'store']);
Route::put('/tujuan-update/{id}', [TujuanController::class, 'update']);
Route::delete('/hapus-tujuan/{id}', [TujuanController::class, 'destroy'])->name('hapus');
//SASARAN
Route::get('/sasaran', [SasaranController::class, 'index'])->name('sasaran');
Route::post('/sasaran-store/{id}', [SasaranController::class, 'store']);
Route::put('/sasaran-update/{id}', [SasaranController::class, 'update']);
Route::delete('/hapus-sasaran/{id}', [SasaranController::class, 'destroy'])->name('hapus');
Route::get('/sasaran/search', [SasaranController::class, 'search']);
//DETAIL SASARAN
Route::get('detailsasaran/{id}', [SasaranController::class, 'detail'])->name('detailsasaran');