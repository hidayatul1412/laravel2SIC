<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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

Route::get('/home-question-respon', function () {
    return view('home-question-respon');
})->name('home-question-respon');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
