<?php

use App\Http\Controllers\ActivityCmtSubController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailContent;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ViewActivityController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostContentController;
use App\Http\Controllers\viewMembersController;
use App\Http\Controllers\ResourceController;
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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/home', function () {
    return view('home');
});

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/home', function () {
//     return view('home');
// });



Route::get('/post_content', function () {
    return view('post_content');
});




Route::get('/donate', function () {
    return view('donation');
});
Route::get('/register', function () {
    return view('user.register');
});


// Admin Route
Route::get('/admin', function () {
    return view('NiceAdmin.index');
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
Route::resource('category', CategoryController::class);
Route::resource('postContent', PostContentController::class);
// Route::resource('admin/resource', ResourceController::class);

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


Route::get('/admin/donation', function () {
    return view('AdminModules.Report.index');
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
// Route::get('about/team-leader', function () {
//     return view('about.team-leader');
// });
Route::get('about/team-member', function () {
    return view('about.team-member');
});
Route::get('about/department', function () {
    return view('about.department');
});


//resoure

// Route::get('/resource', function () {
//     return view('resource.index');
// });

// Route::get('/resource/show', function () {
//     return view('resource.show');
// });

// view post content
Route::controller(ViewActivityController::class)->group(function () {
    Route::get('/list_content', 'index')->name('listContent');
});

// view detail post content
// Route::controller(ViewActivityController::class)->group(function(){
//     Route::get('/detail_content/{id}','show')->name('detailContent');

// });

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('achievement');
    Route::get('/home', 'index');
});
Route::controller(ViewActivityController::class)->group(function () {
    Route::get('/detail_content/{id}/{category_id}', 'show')->name('detailContent');
});

Route::controller(DonationController::class)->group(function () {
    Route::get('/donation', 'index')->name('donation_view');
});


Route::controller(viewMembersController::class)->group(function () {
    Route::get('about/team-leader', 'show')->name('about/team-leader');
});




//register
Route::get('/register', function () {
    return view('user.register');
})->name('user.registerForm');
Route::post('/users/register', [AuthController::class, 'register'])->name('user.register');

//login
Route::get('/login', function () {
    return view('user.login');
})->name('user.loginForm');
Route::post('/users/login', [AuthController::class, 'login'])->name('user.login');

//send otp
Route::get('/send_otp', function () {
    return view('user.send_otp');
})->name('user.sendOtpForm');
Route::post('/users/send_otp', [AuthController::class, 'sendOtp'])->name('user.sendOtp');

//verify otp
Route::get('/verify_otp', function () {
    return view('user.verify_otp');
})->name('user.verify_otpForm');

Route::post('/users/verify_otp', [AuthController::class, 'verifyOtp'])->name('user.verifyOtp');

//logout
Route::post('/users/logout', [AuthController::class, 'logout'])->name('user.logout');


// resource admin

Route::get('/admin/resource', [ResourceController::class, 'index'])->name('admin.resource.index');
Route::get('/admin/resource/{resource}/show', [ResourceController::class, 'show'])->name('admin.resource.show');
Route::get('/admin/resource/create', [ResourceController::class, 'create'])->name('admin.resource.create');
Route::post('/admin/resource/store', [ResourceController::class, 'store'])->name('admin.resource.store');
Route::get('/admin/resource/{resource}/edit', [ResourceController::class, 'edit'])->name('admin.resource.edit');
Route::put('/admin/resource/{resource}/update', [ResourceController::class, 'update'])->name('admin.resource.update');
Route::delete('/admin/resource/{resource}/delete', [ResourceController::class, 'destroy'])->name('admin.resource.delete');
Route::post('/admin/resource/uploadImage', [ResourceController::class,'uploadCkEditor'])->name('admin.resource.uploadCkEditor.image');
