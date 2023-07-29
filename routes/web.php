<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('NiceAdmin.index');
});

Route::get('/post', function () {
    return view('listModules.post');
});

Route::get('/category', function () {
    return view('listModules.category');
});

Route::get('/user', function () {
    return view('listModules.user');
});


Route::get('/report', function () {
    return view('listModules.report');
});

Route::get('/users-profile', function () {
    return view('NiceAdmin.users-profile');
});

Route::get('/pages-contact', function () {
    return view('NiceAdmin.pages-contact');
});


Route::get('/pages-register', function () {
    return view('NiceAdmin.pages-register');
});


Route::get('/pages-login', function () {
    return view('NiceAdmin.pages-login');
});