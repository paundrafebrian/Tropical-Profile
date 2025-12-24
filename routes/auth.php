<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| ADMIN AUTH ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    // Custom Admin Login URL
    Route::get('/L0g1n', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('/L0g1n', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
