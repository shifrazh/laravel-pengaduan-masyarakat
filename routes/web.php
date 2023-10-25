<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\login1Controller;
use App\Http\Controllers\LoginPetugasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\petugasController;




Route::get('/login1Controller', [login1Controller::class, 'index'])->name('login1');
Route::get('/login1', [login1Controller::class, 'index']);
Route::post('/login1', [login1Controller::class, 'login1']);
Route::get("/logout", [login1Controller::class, 'logout']);
    Route::middleware(['auth'])->group(function  (){
});
Route::get('/home', [PengaduanController::class, 'index']);
Route::get('/isi-pengaduan', [PengaduanController::class, 'tampil_pengaduan']);
Route::post('/isi-pengaduan', [PengaduanController::class, 'proses_tambah_pengaduan']);
Route::get('/hapus-pengaduan/{id}', [PengaduanController::class, 'hapus']);
Route::get('/detail-pengaduan/{id}', [PengaduanController::class, 'detail_pengaduan']);
Route::get('/laporan/{id}', [PengaduanController::class, 'laporan']);
Route::get('/halaman_pengaduan/{id}', [PengaduanController::class, 'halaman_pengaduan']);
Route::get('/lihat-laporan/{id}', [PengaduanController::class, 'lihat_laporan']);
Route::get('/register/{id}', [PengaduanController::class, 'register']);
Route::get("/register", [AuthController::class, 'register']);
Route::get("/register", [AuthController::class, 'store']);
Route::get("/pengaduan", [AuthController::class, 'detail_pengaduan']);
Route::get("/petugas/login", [LoginPetugasController::class, 'index']);
Route::post("/petugas/login", [LoginPetugasController::class, 'login']);
Route::middleware(['cekPetugas'])->group(function(){
});

