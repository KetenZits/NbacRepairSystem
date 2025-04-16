<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/lumos', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');

Route::view('/loginfail', 'loginfail')->name('loginfail');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth', 'admin'])->group(function () {
    // เส้นทางสำหรับ admin เท่านั้น
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
    
    Route::get('/service-view', function () {
        return view('services-view');
    });
    Route::get('/service-edit', function () {
        return view('service-edit');
    });
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/service-form', function () {
    return view('service-form');
});

Route::get('/about', function () {
    return view('about');
});
