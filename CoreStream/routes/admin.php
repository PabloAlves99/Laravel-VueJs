<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::prefix("admin")->middleware('auth')->group(function () {
    Route::get('/registered', [UserController::class,'registered'])->name('users.registered');
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('users.create.register');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('users.store.register');
});
