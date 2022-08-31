<?php

use Illuminate\Support\Facades\Route;
use app\Http\controllers\AttendancedController;


Route::middleware('auth')->group(function(){ 
    Route::get('/', [AttendancedController::class, 'index']);
    Route::get('/attendance/start', [AttendancedController::class, 'add']);
});


require __DIR__.'/auth.php';
