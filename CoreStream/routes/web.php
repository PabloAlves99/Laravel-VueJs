<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/users', [UserController::class,'registration'])->name('users.registration');

Route::get('/register', function () {
    return Inertia::render('Auth/Register');
})->name('register');

Route::get('/', function () {
    return Inertia::render('Home');
})->middleware(['auth', 'verified'])->name('Home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
