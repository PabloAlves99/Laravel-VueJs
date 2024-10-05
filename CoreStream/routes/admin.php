<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProfileController;


Route::middleware('auth')->group(function () {
    Route::get('/profile/{user}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/{user}', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix("admin")->middleware('auth')->group(function () {
    Route::get('/registered', [UserController::class,'registered'])->name('users.registered');
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('users.create.register');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('users.store.register');

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');
    Route::put('/email/update/{user}', [EmailController::class, 'update'])->name('email.update');
});
