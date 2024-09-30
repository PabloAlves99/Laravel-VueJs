<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Home');
})->middleware(['auth'])->name('Home');

Route::prefix("admin")->middleware('auth')->group(function () {
    Route::get('/registered', [UserController::class,'registered'])->name('users.registered');
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('users.create.register');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('users.store.register');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
