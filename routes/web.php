<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;
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
Route::get('/donate', function(){
    return view('donation');
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

Route::get('/resource',[ResourceController::class,'index'])->name('resource.index');
Route::get('/resource/create',[ResourceController::class,'create'])->name('resource.create');
Route::post('/resource', [ResourceController::class, 'store'])->name('resource.store');
Route::get('/resource/{resource}/edit', [ResourceController::class, 'edit'])->name('resource.edit');
Route::put('/resource/{resource}', [ResourceController::class, 'update'])->name('resource.update');
Route::delete('/resource/{resource}', [ResourceController::class,'destroy'])->name('resource.delete');

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


//resoure


Route::get('/resource/show', function () {
    return view('resource.show');
});

