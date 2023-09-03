<?php

use App\Http\Controllers\Api\TeamController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PositionController;
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
    return view('AdminModules.Category.index');
});

Route::get('postContent/', function () {
    return view('AdminModules.PostContent.index');
});

Route::get('/report', function () {
    return view('AdminModules.Report.index');
});


Route::resource('member', MemberController::class);
Route::resource('position', PositionController::class);
Route::resource('team', TeamController::class);




Route::get('/user', function () {
    return view('AdminModules.User.index');
});

Route::get('/team', function () {
    return view('AdminModules.Team.index');
});

Route::get('/position', function () {
    return view('AdminModules.Position.index');
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
