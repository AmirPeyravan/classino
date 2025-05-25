<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Middleware\IsAdmin;

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
    ->middleware([IsAdmin::class])->name('dashboard');

Route::get('/teacherDashboard', function () {
    return view('teacher-dashboard');
})->name('teacherDashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
