<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Middleware\RoleCheck;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::prefix('/')->group(function () {
    Route::get('/', function () {
        return view('index');
    })->name('/');

    Route::get('/courses', function () {
        return view('courses');
    })->name('courses');

    Route::get('/teachers', function () {
        return view('teachers');
    })->name('teachers');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
});

Route::get('/adminDashboard', [AdminController::class, 'dashboard'])
    ->middleware([RoleCheck::class])
    ->name('adminDashboard');

Route::get('/teacherDashboard', [TeacherController::class, 'dashboard'])
    ->middleware([RoleCheck::class])
    ->name('teacherDashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
