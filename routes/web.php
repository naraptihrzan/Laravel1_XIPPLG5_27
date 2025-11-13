<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\ClassroomController;


Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('students', StudentController::class);
    Route::resource('classrooms', ClassroomController::class);

});

