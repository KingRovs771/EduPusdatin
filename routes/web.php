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
use App\Http\Controllers\TahunAkademikController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\EkstrakulikulerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/infophp', function () {
    phpinfo();
});

//Route Authentication
Route::get('/logout', [AdmininistratorController::class, 'index'])->name('logout');

//Route Home
Route::get('/dashboard', [AdmininistratorController::class, 'index'])->name('dashboard');

//Route Profile Sekolah
Route::get('/profile_sekolah', [SekolahProfileController::class, 'index'])->name('schooldata.profile_sekolah');
Route::get('/update_schoolData', [SekolahProfileController::class, 'index'])->name('schooldata.update');

//Tahun Akademik
Route::get('/tahun_akademik', [TahunAkademikController::class, 'index'])->name('schooldata.academicyear.tahun_akademik');
Route::get('/tahun_akademik/input', [TahunAkademikController::class, 'formInput'])->name('schooldata.academicyear.input');

//mapel
Route::get('/mapel', [MapelController::class, 'index'])->name('schooldata.mapel');
Route::get('/mapel/input', [MapelController::class, 'formInput'])->name('schooldata.mapel.input');

//Route Sarana Prasarana
Route::get('/sarpras', [AdmininistratorController::class, 'index'])->name('sarpras');

//Route Data GTK
Route::get('/guru', [AdmininistratorController::class, 'index'])->name('gtk.guru');
Route::get('/tendik', [AdmininistratorController::class, 'index'])->name('gtk.tendik');

//Route Peserta Didik
Route::get('/siswa', [StudentsController::class, 'index'])->name('pesertadidik.siswa');
Route::get('/siswa/formInputSiswa', [StudentsController::class, 'formInputSiswa'])->name('pesertadidik.siswa.formInputSiswa');
Route::get('/siswa/formImportSiswa', [StudentsController::class, 'formImportSiswa'])->name('pesertadidik.siswa.formImportSiswa');

Route::get('/alumni', [AdmininistratorController::class, 'index'])->name('pesertadidik.alumni');
Route::get('/outSiswa', [AdmininistratorController::class, 'index'])->name('pesertadidik.outStudents');

//Route Rombel
Route::get('/kelas', [AdmininistratorController::class, 'index'])->name('rombel.kelas');
Route::get('/ekstrakulikuler', [EkstrakulikulerController::class, 'index'])->name('rombel.ekstrakulikuler');
Route::get('/ekstrakulikuler/input', [EkstrakulikulerController::class, 'formInput'])->name('rombel.ekstrakulikuler.input');

//Route Jadwal
Route::get('/jadwal', [AdmininistratorController::class, 'index'])->name('jadwal');

//Route Nilai
Route::get('/nilai', [AdmininistratorController::class, 'index'])->name('nilai');

//Route User Profile
Route::get('/userProfile', [AdmininistratorController::class, 'index'])->name('user_profile');

//Route Download
Route::get('/download', [AdmininistratorController::class, 'index'])->name('download');



