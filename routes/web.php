<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceController;
use App\Models\ServiceUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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
    
    Route::get('/service-view', [ServiceController ::class, 'showServiceView'])->name('service-view');
    Route::get('/service-edit', [ServiceController ::class, 'showServiceEdit'])->name('service-edit');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/service-form', [ServiceController ::class, 'showServiceForm'])->name('service-form');
Route::post('/service-store', [ServiceController::class, 'servicestore'])->name('service-store');

