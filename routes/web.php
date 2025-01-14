<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AprovalController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DockingDataController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NewDataController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\RoleCheck;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::middleware([Authenticate::class])->group(function () {
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::get('/dashboard/{id}', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dockingdata', [DockingDataController::class, 'index'])->name('dockingdata');
    Route::get('/dockingdata/search', [DockingDataController::class, 'search'])->name('dockingdata.search');
    Route::delete('/dockingdata/{id}', [DockingDataController::class, 'destroy'])->name('dockingdata.destroy');
    Route::get('/dockingdata/edit/{id}', [DockingDataController::class, 'edit'])->name('dockingdata.edit');
    Route::put('/dockingdata/update/{id}', [DockingDataController::class, 'update'])->name('dockingdata.update');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/report', [ReportController::class, 'index'])->name('report.index');
    Route::get('/report/{year}', [ReportController::class, 'yearReport'])->name('report.year');
    Route::get('/report/{year}/{month}', [ReportController::class, 'monthReport'])->name('report.month');
    Route::get('/report/export/year/{year}', [ReportController::class, 'exportFullYear'])->name('report.export.year');
    Route::get('/report/export/month/{year}/{month}', [ReportController::class, 'exportPerMonth'])->name('report.export.month');
    Route::get('/newdata', [NewDataController::class, 'index'])->name('newdata');
    Route::post('/newdata', [NewDataController::class, 'store'])->name('newdata.store');
    Route::middleware([RoleCheck::class])->group(function () {
        Route::get('/aproval', [AprovalController::class, 'index'])->name('aproval');
        Route::get('/aproval/search', [AprovalController::class, 'search'])->name('aproval.search');
        Route::get('/aproval/details/{id}', [AprovalController::class, 'details'])->name('aproval.details');
        Route::post('/aproval/verify/{id}', [AprovalController::class, 'verify'])->name('aproval.verify');
    });
});

Route::middleware([RedirectIfAuthenticated::class])->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
    Route::get('/', HomeController::class)->name('home');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
});
