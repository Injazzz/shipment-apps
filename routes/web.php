<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DockingDataController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TeamController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware([Authenticate::class])->group(function () {
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::get('/dashboard/{id}', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics');
    Route::get('/dockingdata', [DockingDataController::class, 'index'])->name('dockingdata');
    Route::get('/team', [TeamController::class, 'index'])->name('team');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/report', [ReportController::class, 'index'])->name('report');
});

Route::middleware([RedirectIfAuthenticated::class])->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
    Route::get('/', HomeController::class)->name('home');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
});
