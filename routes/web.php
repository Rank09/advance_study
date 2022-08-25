<?php

use Illuminate\Support\Facades\Route;
use app\Http\controllers\AttendancedController;

Route::get('/index', function () {
    return view('index');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
