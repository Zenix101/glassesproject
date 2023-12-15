<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/lmao', function () {
    return view('auth/login');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/categories', function () {
    return view('categories');
})->name('categories');

Route::get('/menglasses', function () {
    return view('menglasses');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/oneitem', function () {
    return view('oneitem');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/login', function () {
    return view('auth/login');
});