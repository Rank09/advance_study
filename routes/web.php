<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendancedController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::middleware('auth')->group(function() { 
    Route::get('/', [AttendancedController::class, 'index']);
    Route::get('/attendance', [AttendancedController::class, 'attendance']);
    Route::post('/attendance', [AttendancedController::class, 'list']);
    Route::post('/attendance/start', [AttendancedController::class, 'add']);
    Route::post('/attendance/end', [AttendancedController::class, 'save']);
    Route::get('/logout', [AuthenticatedSessionController::class,'destroy']);
});

require __DIR__.'/auth.php';
