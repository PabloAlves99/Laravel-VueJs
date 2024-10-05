<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\EmailController;



Route::prefix("admin")->middleware('auth')->group(function () {
    Route::get('/registered', [UserController::class,'registered'])->name('users.registered');
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('users.create.register');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('users.store.register');

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');
    Route::put('/email/update/{user}', [EmailController::class, 'update'])->name('email.update');
});
