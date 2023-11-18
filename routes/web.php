<?php

use App\Http\Controllers\ActivityCmtSubController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\DetailContent;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DonatorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\inputImageController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ViewActivityController;
use App\Http\Controllers\viewMembersController;
use App\Models\PostContent;
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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/home', function () {
//     return view('home');
// });


Route::get('/post_content', function () {
    return view('post_content');
});



Route::get('/login', function () {
    return view('user.login');
});

Route::get('/register', function () {
    return view('user.register');
});
// Route::get('/donate', function () {
//     return view('donation');
// });

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

Route::get('/reference', function () {
    return view('AdminModules.Report.index');
});



// Route::get('/admin/donation', function () {
//     return view('AdminModules.Report.index');
// });



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
// Route::get('about/team-leader', function () {
//     return view('about.team-leader');
// });
Route::get('about/team-member', function () {
    return view('about.team-member');
});
// Route::get('about/department', function () {
//     return view('about.department');
// });


//resoure

Route::get('/resource', function () {
    return view('resource.index');
});

Route::get('/resource/show', function () {
    return view('resource.show');
});

// view post content
Route::controller(ViewActivityController::class)->group(function(){
    Route::get('/list_content','index')->name('listContent');

});


Route::controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('achievement');
    Route::get('/home','index');

});
Route::controller(ViewActivityController::class)->group(function(){
    Route::get('/detail_content/{id}/{category_id}','show')->name('detailContent');

});

Route::controller(DonationController::class)->group(function(){
    Route::get('/donation','index')->name('donation_view');
    // Route::get('/admin/donation','create')->name('goTodonationCard');
    Route::post('/admin/donation','store')->name('storeDonationCard');
    Route::get('/admin/donation','show')->name('showDonationCard');
    Route::delete('/admin/donation/remove','delete')->name('deleteDonationCard');

});


Route::controller(viewMembersController::class)->group(function(){
    Route::get('about/team-leader','show')->name('about/team-leader');

});

Route::controller(DepartementController::class)->group(function(){
    Route::get('about/departement','show')->name('about/departement');

});

// admin side
// donator
Route::controller(DonatorController::class)->group(function(){
    // Route::get('/admin/donation','create')->name('goTodonationCard');
    // Route::post('/admin/donation','store')->name('storeDonationCard');
});










