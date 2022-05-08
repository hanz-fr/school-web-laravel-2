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

Route::get('/', function () {
    return view('homepage', [
        "active" => "home",
    ]);
});

Route::get('/program', function () {
    return view('program', [
        "active" => "program",
    ]);
});

Route::get('/kurikulum', function () {
    return view('kurikulum', [
        "active" => "kurikulum",
    ]);
});

Route::get('/ekskul', function () {
    return view('ekskul', [
        "active" => "ekskul",
    ]);
});

Route::get('/profil', function () {
    return view('profil', [
        "active" => "profil",
    ]);
});