<?php

use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('homepage', [
        "active" => "home",
    ]);
}); */

Route::get('/', function() {
    return view('beranda', [
        "active" => "beranda", 
    ]);
})->name('home');

Route::get('/program', function () {
    return view('beranda', [
        "active" => "program",
    ]);
})->name('program');

Route::get('/kurikulum', function () {
    return view('beranda', [
        "active" => "kurikulum",
    ]);
})->name('kurikulum');

Route::get('/ekskul', function () {
    return view('beranda', [
        "active" => "ekskul",
    ]);
})->name('ekskul');

Route::get('/profil', function () {
    return view('beranda', [
        "active" => "profil",
    ]);
})->name('profil');

Route::get('/visi-misi', function() {
    return view('beranda', [
        "active" => "visi-misi",
    ]);
})->name('visi-misi');

Route::get('/sambutan-kepala-sekolah', function() {
    return view('beranda', [
        "active" => "sambutan",
    ]);
})->name('sambutan');

Route::get('/berita', function() {
    return view('berita', [
        "active" => "berita",
    ]);
})->name('berita');