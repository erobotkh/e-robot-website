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
Route::get('/home', function () {
    return view('home');
});


Route::get('/post_content', function () {
    return view('post_content');
});
Route::get('/list_content', function () {
    return view('list_content');
});
Route::get('/detail_content', function () {
    return view('detail_content');
});

Route::get('/login', function () {
    return view('user.login');
});

Route::get('/register', function () {
    return view('user.register');
});


// Admin Route
Route::get('/admin', function () {
    return view('NiceAdmin.index');
});

Route::get('/category', function () {
    return view('AdminModules.category');
});

Route::get('postContent/', function () {
    return view('AdminModules.postContent');
});

Route::get('/report', function () {
    return view('AdminModules.report');
});

Route::get('/user', function () {
    return view('AdminModules.user');
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


//about us 
Route::get('about/mission-vision', function () {
    return view('about.mission_vision');
});
Route::get('about/history', function () {
    return view('about.history');
});
Route::get('about/team-leader', function () {
    return view('about.team-leader');
});
Route::get('about/team-member', function () {
    return view('about.team-member');
});Route::get('about/department', function () {
    return view('about.department');
});