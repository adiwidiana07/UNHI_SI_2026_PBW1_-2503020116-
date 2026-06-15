<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/divisi', function () {
    return view('divisi');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/admin', 'admin.admin-dashboard')->name('dashboard');
    Route::view('/gallery', 'admin.gallery')->name('gallery');
    Route::view('/team', 'admin.team')->name('team');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function () {
})->name('login.post');

Route::post('/logout', function () {
})->name('logout');