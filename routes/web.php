<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;


// Home route → fetches latest projects
Route::get('/', [ProjectController::class, 'index'])->name('home');

// Full project CRUD
Route::resource('projects', ProjectController::class);


// Admin-only (requires login)
Route::middleware(['auth'])->group(function () {
    Route::resource('admin', AdminController::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('verified')->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Breeze / auth routes
require __DIR__.'/auth.php';
