<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CartControllre;

// check ip
Route::get('/check_ip', [LoginController::class, 'checkIp']);

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

Route::get('/success', function () {
    return view('common.success');
});


// Ongeza hapa
Route::get('/add', function () {
    return view('admin.add');
});

// register here
Route::post('/register_here',[LoginController::class,'register']);

// login route here
Route::post('/login_here',[LoginController::class,'login']);

// add new computer
Route::post('/add_computer',[ComputerController::class,'addComputer']);

// search device here
Route::post('/search_computer',[ComputerController::class,'searchComputer']);

// Add device to cart
Route::get('/add_cart/{id}',[ComputerController::class,'addcart']);

// show the cart
Route::get('/cart',[CartControllre::class,'showCart']);

// checkout hre
Route::get('/checkout/{id}',[CartControllre::class,'checkOut']);

// Make payments
Route::post('/make_payments',[CartControllre::class,'makePayments']);

// all computers
Route::get('/all_computers',[ComputerController::class,'allComputers']);

// delete computer
Route::get('/delete_computer/{id}',[ComputerController::class,'deleteComputer']);

// logout
Route::get('/logout',[LoginController::class,'logout']);

// remove from cart
Route::get('/remove/{id}',[CartControllre::class,'remove']);

// all payments
Route::get('/all_payments',[CartControllre::class,'allPayments']);

// cart
// Route::get('/cart', function () {
//     return view('common.cart');
// });

