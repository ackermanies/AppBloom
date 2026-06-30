<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ReportController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/apps', [PageController::class, 'apps'])->name('apps');
Route::get('/apps/{application}', [PageController::class, 'show'])
    ->name('apps.show');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::prefix('admin')->group(function () {

    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.process');

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('/applications', ApplicationController::class);

        Route::post('/logout', [AuthController::class, 'logout'])
            ->name('logout');

        Route::get('/report/pdf', [ReportController::class, 'pdf'])
            ->name('applications.pdf');
    });
});
