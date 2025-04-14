<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// auth
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/service-view', function () {
    return view('services-view');
});
Route::get('/service-form', function () {
    return view('service-form');
});
Route::get('/service-edit', function () {
    return view('service-edit');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});