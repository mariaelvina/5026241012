<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KursiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('prolog', function () {
	return view('prolog');
});

Route::get('example', function () {
	return view('example');
});

Route::get('pert4', function () {
	return view('pert4layout');
});

Route::get('berita', function () {
	return view('berita');
});

Route::get('beritarobodog', function () {
	return view('robodognews');
});

Route::get('bootstrap', function () {
	return view('bootstrapresponsive');
});

Route::get('template', function () {
	return view('templ');
});

Route::get('index', function () {
	return view('index');
});

Route::get('kaladulu', function () {
	return view('kaldul');
});

Route::get('avoskin', function () {
	return view('avoskin');
});

Route::get('week5', function () {
	return view('week5');
});

Route::get('option', function () {
	return view('option');
});

Route::get('dosen', [DosenController:: class, 'index']);
Route::get('biodata', [DosenController:: class, 'biodata']);

Route::get('/pegawailama/{nama}', [PegawaiController:: class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController:: class, 'home']);
Route::get('/blog/tentang', [BlogController:: class, 'tentang']);
Route::get('/blog/kontak', [BlogController:: class, 'kontak']);

//route db
Route::get('/pegawai', [PegawaiDBController::class, 'index2']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

// Route CRUD Kursi
Route::get('/kursi', [KursiController::class, 'index'])->name('kursi.index');
Route::get('/kursi/create', [KursiController::class, 'create'])->name('kursi.create');
Route::post('/kursi', [KursiController::class, 'store'])->name('kursi.store');
Route::get('/kursi/{kodekursi}/edit', [KursiController::class, 'edit'])->name('kursi.edit');
Route::put('/kursi/{kodekursi}', [KursiController::class, 'update'])->name('kursi.update');
Route::delete('/kursi/{kodekursi}', [KursiController::class, 'destroy'])->name('kursi.destroy');
