<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\login1Controller;
use App\Http\Controllers\LoginPetugasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\petugasController;




Route::get('/login1Controller', [login1Controller::class, 'index'])->name('login1');
Route::get('/login1', [login1Controller::class, 'index'])->name("login");
Route::post('/login1', [login1Controller::class, 'login1']);
Route::get("/logout", [login1Controller::class, 'logout']);
    Route::middleware(['auth'])->group(function  (){
});


Route::post('/isi-pengaduan', [PengaduanController::class, 'tampil_pengaduan']);
Route::post('/isi-pengaduan', [PengaduanController::class, 'proses_tambah_pengaduan']);
Route::get('/hapus-pengaduan/{id}', [PengaduanController::class, 'hapus']);
Route::get('/detail_pengaduan/{id}', [PengaduanController::class, "detail"]);
Route::get('/laporan/{id}', [PengaduanController::class, 'laporan']);
Route::get('/halaman_pengaduan/{id}', [PengaduanController::class, 'pengaduan']);
Route::get('/halaman_pengaduan', [PengaduanController::class, 'pengaduan']);
Route::get('/hasil_laporan', [PengaduanController::class, 'hasil laporan']);
Route::get('/hasil_laporan', [PengaduanController::class, 'hasil laporan']);
Route::get('/lihat-laporan/{id}', [PengaduanController::class, 'lihat_laporan']);
Route::get('/register/{id}', [MasyarakatController::class, 'register']);
Route::get("/register", [AuthController::class, 'register']);
Route::get("/register", [MasyarakatController::class, 'table_masyarakat']);
Route::get("/pengaduan", [AuthController::class, 'detail_pengaduan']);
Route::get("/petugas/login", [LoginPetugasController::class, 'index']);
Route::post("/petugas/login", [LoginPetugasController::class, 'login']);

Route::get("/laporan_masyarakat", [PengaduanController::class, 'laporan_masyarakat']);
Route::get("/laporan_masyarakat/{id}", [PengaduanController::class, 'laporan_masyarakat']);
Route::get("/registerpetugas", [petugasController::class, '']);
Route::get("/registerpetugas", [petugasController::class, '']);
Route::middleware(['cekPetugas'])->group(function(){
});


    Route::get('/home', [PengaduanController::class, 'index']);



