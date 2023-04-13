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
    return view('site.home');
});

Route::get('/down', function () {
    return view('site.down');
});

Route::get('/problem', function () {
    return view('site.problem');
});

Route::get('/success', function () {
    return view('site.success');
});

Route::get('/server', function () {
    return view('site.server');
});


Route::get('admin', function () {
    return view('admin.dashboard');
});

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('admin/user', function () {
    return view('admin.user');
});

Route::get('admin/incidents', function () {
    return view('admin.incidents');
});

Route::get('admin/incidents/edit/1', function () {
    return view('admin.incidents-edit');
});

Route::get('admin/server', function () {
    return view('admin.server');
});