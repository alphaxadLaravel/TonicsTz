<?php

use Illuminate\Support\Facades\Route;

// URL Route zote za System huandikwa hapa
Route::get('/', function () {
    return view('common.welcome');
});

Route::get('/#about', function () {
    return view('common.welcome');
});


Route::get('/#huduma', function () {
    return view('common.welcome');
});


Route::get('/#brand', function () {
    return view('common.welcome');
});


Route::get('/#team', function () {
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

// Ongeza hapa
Route::get('/add', function () {
    return view('admin.add');
});
