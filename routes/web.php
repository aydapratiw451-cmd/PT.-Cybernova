<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

Route::get('/profil-mitra', function () {
    return view('profil-mitra');
});

Route::get('/form-laporan', function () {
    return view('form-laporan');
});

Route::get('/laporan', function () {
    return view('laporan');
});