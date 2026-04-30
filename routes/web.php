<?php

use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;

Route::prefix('admin')
    ->middleware(['auth'])
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->middleware('verified')
            ->name('dashboard');

        Route::get('/reset/akun', [UserController::class, 'getResetPassword'])
            ->name('reset.akun');

        Route::resource('users', UserController::class);
        Route::put('users/{user}/reset-password', [UserController::class, 'resetPassword'])
            ->name('users.reset_password');

        Route::resource('applications', ApplicationController::class);
        Route::resource('faqs', FaqController::class);
    });

require __DIR__ . '/auth.php';
