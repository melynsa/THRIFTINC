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

Route::get('/thriftinc', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/signup_2', function () {
    return view('signup2');
});

Route::get('/home2', function () {
    return view('home2');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/forget', function () {
    return view('forgotpass');
});

Route::get('/confirmPassword', function () {
    return view('forgotpass2');
});

Route::get('/catalogwoman', function () {
    return view('catalogwoman');
});

Route::get('/catalogman', function () {
    return view('catalogman');
});

Route::get('/catalogAccessories', function () {
    return view('catalogAccessories');
});

