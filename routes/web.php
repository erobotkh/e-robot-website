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

Route::get('/post_content',function(){
    return view('post_content');
});
Route::get('/list_content',function(){
    return view('list_content');
});
Route::get('/detail_content',function(){
    return view('detail_content');
});