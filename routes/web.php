<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/tentang', function () {
    return view('halaman-about');
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});
