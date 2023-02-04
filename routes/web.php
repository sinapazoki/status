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
    return view('home');
});

Route::get('/down', function () {
    return view('down');
});

Route::get('/problem', function () {
    return view('problem');
});

Route::get('/success', function () {
    return view('success');
});

Route::get('/server', function () {
    return view('server');
});