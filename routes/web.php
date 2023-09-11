<?php

use App\Http\Controllers\TeamController;
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
    return view('home');
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
Route::get('/donate', function () {
    return view('donation');
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
Route::get('/delete', [PositionController::class], 'delete');

Route::get('/delete', function () {
    return view('AdminModules.Member.delete');
});


Route::get('/user', function () {
    return view('AdminModules.User.index');
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
});
Route::get('about/department', function () {
    return view('about.department');
});


//resoure

Route::get('/resource', function () {
    return view('resource.index');
});

Route::get('/resource/show', function () {
    return view('resource.show');
});
