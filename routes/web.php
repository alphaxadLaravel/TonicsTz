<?php

use Illuminate\Support\Facades\Route;

// URL Route zote za System huandikwa hapa
Route::get('/', function () {
    return view('common.welcome');
});

// login Forms
Route::get('/login', function () {
    return view('common.login');
});

// Register route hapa
Route::get('/register', function () {
    return view('common.register');
});

// tafuta ukiwa nje ya system hapa
Route::get('/tafuta_out', function () {
    return view('common.tafuta');
});

// computer
Route::get('/computer', function () {
    return view('common.computer');
});

// cart
Route::get('/cart', function () {
    return view('common.cart');
});
