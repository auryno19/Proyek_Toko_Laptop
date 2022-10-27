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

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/katalogDetail', function () {
    return view('katalogDetail');
});


Route::get('/service', function () {
    return view('service');
});

Route::get('/register', function () {
    return view('register', [
        'title' => 'Register'
    ]);
});

Route::get('/login', function () {

    return view('login', [
        'title' => 'Login'
    ]);
});
