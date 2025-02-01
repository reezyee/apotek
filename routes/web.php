<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\UserController;

Route::middleware(['auth'])->group(function () {
    // Route untuk menampilkan halaman profil pengguna
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    
    // Route untuk menghapus akun pengguna
    Route::delete('/user/delete', [UserController::class, 'destroy'])->name('user.destroy');
});

Route::get('login/google', [GoogleController::class, 'login'])->name('google.login');
Route::get('login/google/callback', [GoogleController::class, 'callback']);
Route::post('logout', [GoogleController::class, 'logout'])->name('logout');

// Rute untuk halaman lainnya
Route::get('/', [App\Http\Controllers\KategorisController::class, 'index']);

Auth::routes(['verify' => true]);

// Halaman Dashboard yang memerlukan verifikasi email
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])
    ->name('dashboard');
