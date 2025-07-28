<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmininistratorController;
use App\Http\Controllers\SekolahProfileController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\AlumniContoller;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\SarprasController;
use App\Http\Controllers\SiswaKeluarController;
use App\Http\Controllers\TendikController;

Route::get('/', function () {
    return view('welcome');
});

//Route Authentication
Route::get('/logout', [AdmininistratorController::class, 'index'])->name('logout');

//Route Home
Route::get('/dashboard', [AdmininistratorController::class, 'index'])->name('dashboard');

//Route Profile Sekolah
Route::get('/profile_sekolah', [SekolahProfileController::class, 'index'])->name('schooldata.profile_sekolah');
Route::get('/update_schooldata', [SekolahProfileController::class, 'index'])->name('schooldata.update');
Route::get('/tahun_akademik', [AdmininistratorController::class, 'index'])->name('schooldata.tahun_akademik');
Route::get('/mapel', [AdmininistratorController::class, 'index'])->name('schooldata.mapel');

//Route Sarana Prasarana
Route::get('/sarpras', [AdmininistratorController::class, 'index'])->name('sarpras');

//Route Data GTK
Route::get('/guru', [AdmininistratorController::class, 'index'])->name('gtk.guru');
Route::get('/tendik', [AdmininistratorController::class, 'index'])->name('gtk.tendik');

//Route Peserta Didik
Route::get('/siswa', [StudentsController::class, 'index'])->name('pesertadidik.siswa');
Route::get('/alumni', [AdmininistratorController::class, 'index'])->name('pesertadidik.alumni');
Route::get('/outSiswa', [AdmininistratorController::class, 'index'])->name('pesertadidik.outStudents');

//Route Rombel
Route::get('/kelas', [AdmininistratorController::class, 'index'])->name('rombel.kelas');
Route::get('/ekstrakulikuler', [AdmininistratorController::class, 'index'])->name('rombel.ekstrakulikuler');

//Route Jadwal
Route::get('/jadwal', [AdmininistratorController::class, 'index'])->name('jadwal');

//Route Nilai
Route::get('/nilai', [AdmininistratorController::class, 'index'])->name('nilai');

//Route User Profile
Route::get('/userProfile', [AdmininistratorController::class, 'index'])->name('user_profile');

//Route Download
Route::get('/download', [AdmininistratorController::class, 'index'])->name('download');



