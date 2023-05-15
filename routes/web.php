<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KbliController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PengawasController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AngkutanController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\CustomerserviceController;
use App\Http\Controllers\DataTampilanController;
use App\Http\Controllers\DataPenerbitanController;
use App\Http\Controllers\ReportController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/landing', function () {
    return view('landing-page');
});
Route::get('/dashboard-pemohon', function () {
    return view('pemohon.dashboard.index');
});

Route::get('/dashboard-petugas', function () {
    return view('petugas.dashboard.index');
});

Route::get('/kendaraan-petugas', function () {
    return view('petugas.kendaraan.index');
});

Route::get('/perusahaan-petugas', function () {
    return view('petugas.perusahaan.index');
});

Route::get('/konfirmasi-angkutan', function () {
    return view('petugas.angkutan.konfirmasi');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// landing - page
Route::get('/', [LandingPageController::class, 'homepage'])->name('homepage');
Route::get('/aboutus', [LandingPageController::class, 'aboutus'])->name('aboutus');
Route::get('/tutorial', [LandingPageController::class, 'tutorial'])->name('tutorial');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('kbli', KbliController::class);
    Route::resource('petugas', PetugasController::class);
    Route::resource('pengawas', PengawasController::class);
    Route::resource('customer-service', CustomerServiceController::class);
    Route::resource('data-tampilan', DataTampilanController::class);
    Route::get('/report', [App\Http\Controllers\ReportController::class, 'index'])->name('index');
    Route::get('/konfirmasi-birokrasi-surat/{id}', [App\Http\Controllers\PerusahaanController::class, 'konfirmasiBirokrasiSurat'])->name('konfirmasiBirokrasiSurat');
    Route::get('/konfirmasi-penerbitan-surat/{id}', [App\Http\Controllers\PerusahaanController::class, 'konfirmasiPenerbitanSurat'])->name('konfirmasiPenerbitanSurat');
});

Route::get('/penerbitan-perusahaan', [App\Http\Controllers\DataPenerbitanController::class, 'indexPerusahaan'])->name('indexPerusahaan');
Route::get('/penerbitan-angkutan', [App\Http\Controllers\DataPenerbitanController::class, 'indexAngkutan'])->name('indexAngkutan');

Route::resource('angkutan', AngkutanController::class);
Route::resource('perusahaan', PerusahaanController::class);


Route::middleware(['auth', 'role:petugas'])->group(function () {
    Route::get('/cetak-surat-perusahaan/{id}', [App\Http\Controllers\PerusahaanController::class, 'cetak_surat'])->name('cetak_surat');
    Route::get('/take-antrian/{id}', [App\Http\Controllers\HomeController::class, 'take_antrian'])->name('take_antrian');
    Route::get('/konfirmasi-pencetakan-surat/{id}', [App\Http\Controllers\PerusahaanController::class, 'konfirmasiPencetakanSurat'])->name('konfirmasiPencetakanSurat');
});

Route::middleware(['auth', 'role:customer-service'])->group(function () {
    Route::get('/konfirmasi-pengambilan-surat/{id}', [App\Http\Controllers\PerusahaanController::class, 'konfirmasiPengambilanSurat'])->name('konfirmasiPengambilanSurat');
});