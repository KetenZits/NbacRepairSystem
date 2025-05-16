<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\NotificationController;
use App\Models\ServiceUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;

Route::get('/vilgadium-rodiosa', [AuthController::class, 'showLogin'])->name('lumos');
Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');
Route::get('/verifyfail', function () {
    return view('loginfail');
})->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::post('/notification/read', [DashboardController::class, 'markAsRead'])->name('notification.read');
    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
    Route::post('/notifications/read/{id}', [NotificationController::class, 'markAsRead'])->name('notifications.read');
    Route::post('/mark-all-read', [NotificationController::class, 'markAllRead'])->name('mark-all-read');

    Route::get('/events', [DashboardController::class, 'getEvents']);
    Route::get('/booking-chart-data', [DashboardController::class, 'bookingData']);

    Route::get('/service-view', [ServiceController::class, 'showServiceView'])->name('service-view');
    Route::get('/service-edit/{id}', [ServiceController::class, 'showServiceEdit'])->name('service-edit');
    Route::get('/service-destroy/{id}', [ServiceController::class, 'servicedestroy'])->name('service-destroy');
    Route::post('/service-update/{id}', [ServiceController::class, 'serviceupdate'])->name('service-update');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/service-form', [ServiceController::class, 'showServiceForm'])->name('service-form');
Route::post('/service-store', [ServiceController::class, 'servicestore'])->name('service-store');


