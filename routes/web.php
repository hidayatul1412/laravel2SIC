<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});

Route::get('/home', [HomeController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');
