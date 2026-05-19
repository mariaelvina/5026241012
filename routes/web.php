<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

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
