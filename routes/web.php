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

Route::get('/cartcnw', function () {
    return view('cartcnw');
});

Route::get('/cartjktw', function () {
    return view('cartjktw');
});

Route::get('/cartpnw', function () {
    return view('cartpnw');
});

Route::get('/cartbw', function () {
    return view('cartbw');
});

Route::get('/cartdw', function () {
    return view('cartdw');
});

Route::get('/cartsw', function () {
    return view('cartsw');
});

Route::get('/cartvw', function () {
    return view('cartvw');
});

Route::get('/cartcm', function () {
    return view('cartcm');
});

Route::get('/cartjm', function () {
    return view('cartjm');
});

Route::get('/cartjogger', function () {
    return view('cartjogger');
});

Route::get('/cartshirt', function () {
    return view('cartshirt');
});

Route::get('/carthoodie', function () {
    return view('carthoodie');
});

Route::get('/cartsp', function () {
    return view('cartsp');
});

Route::get('/cartvest', function () {
    return view('cartvest');
});

Route::get('/cartrd', function () {
    return view('cartrd');
});

Route::get('/cartbl', function () {
    return view('cartbl');
});

Route::get('/cartwl', function () {
    return view('cartwl');
});

Route::get('/cartw', function () {
    return view('cartw');
});

Route::get('/cartgl', function () {
    return view('cartgl');
});

Route::get('/cartan', function () {
    return view('cartan');
});

Route::get('/cartsb', function () {
    return view('cartsb');
});

Route::get('/co', function () {
    return view('co');
});

Route::get('/homeadmin', function () {
    return view('homeadmin');
});

Route::get('/loginadmin', function () {
    return view('loginadmin');
});

Route::get('/catalogadmin1', function () {
    return view('catalogadmin1');
});

Route::get('/catalogadmin2', function () {
    return view('catalogadmin2');
});

Route::get('/catalogadmin3', function () {
    return view('catalogadmin3');
});

Route::get('/addcatalog', function () {
    return view('addcatalog');
});

Route::get('/addcatalog2', function () {
    return view('addcatalog2');
});

Route::get('/addcatalog3', function () {
    return view('addcatalog3');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/historycus', function () {
    return view('historycus');
});

Route::get('/transcation', function () {
    return view('transcation');
});

Route::get('/detailtransaction', function () {
    return view('detailtransaction');
});

Route::get('/detailtrack', function () {
    return view('detailtrack');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/packing', function () {
    return view('packing');
});

Route::get('/pickup', function () {
    return view('pickup');
});

Route::get('/deliver', function () {
    return view('deliver');
});

Route::get('/arrived', function () {
    return view('arrived');
});