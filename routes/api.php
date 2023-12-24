<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\LikeController;
use App\Http\Controllers\Api\ListPostController;
use App\Http\Controllers\Api\MemberController;
use App\Http\Controllers\Api\MemberPositionController;
use App\Http\Controllers\Api\PostContentController;
use App\Http\Controllers\Api\SocailController;
use App\Http\Controllers\Api\SocailLinkController;
use App\Http\Controllers\Api\SubCommentController;
use App\Http\Controllers\Api\TeamController;
use App\Http\Controllers\Api\UserProfileController;
use App\Http\Controllers\Api\EducationController;
use App\Http\Controllers\Api\ExcelLessonDetailController;
use App\Http\Controllers\Api\DonationController;
use App\Http\Controllers\Api\AchievmentController;
use App\Models\MemberPosition;
use App\Models\PostContent;
use App\Models\SubComment;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('verifyOtp', [AuthController::class, 'verifyOtp']);
Route::post('sendOtp', [AuthController::class, 'sendOtp']);
Route::post('sendOtp/forgot-password', [AuthController::class, 'sendOtpForgotPassword']);
Route::post('verifyOtp/forgot-password', [AuthController::class, 'verifyOtpForgotPassword']);
Route::post('forgot-password', [AuthController::class, 'editPassword']);
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);


Route::get('list-post-content/index', [ListPostController::class, 'index']);
Route::post('list-post-content/show', [ListPostController::class, 'show']);
Route::post('list-post-content/show-detail/{post_content_id}', [ListPostController::class, 'detail']);

Route::get('comment/{post_content_id}', [CommentController::class, 'show']);
Route::post('comment/sub-comment', [SubCommentController::class, 'show']);

Route::post('team/store',[TeamController::class,'store']);
Route::get('team/show-all',[TeamController::class,'show']);


Route::post('socail/store',[SocailController::class,'store']);
Route::get('socail/show-all',[SocailController::class,'show']);

Route::post('member/store',[MemberController::class,'store']);
Route::get('member/show-all',[MemberController::class,'show']);
Route::get('member/show/{id}',[MemberController::class,'showLeader']);
Route::post('member-position/store',[MemberPositionController::class,'store']);
Route::get('member-position/show-all',[MemberPositionController::class,'show']);

Route::post('socail-link/store',[SocailLinkController::class,'store']);
Route::get('category/show', [CategoryController::class, 'show']);

Route::get('user-profile/show-another-user-profile/{id}',[UserProfileController::class,'showAnotherUserProfile']);
Route::get('post-content/show_post_of_another_user/{id}', [PostContentController::class, 'postContentOfAnotherUser']);

Route::get('donation/show',[DonationController::class,'showInfo']);
Route::get('donator/show',[DonationController::class,'showDonator']);
Route::post('donator/create',[DonationController::class,'createDonator']);

Route::get('achievment/show',[AchievmentController::class,'showInfo']);

Route::middleware(['auth:api'])->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);

    Route::post('category/store', [CategoryController::class, 'store']);
    
    Route::post('post-content/store', [PostContentController::class, 'store']);
    Route::post('post-content/edit', [PostContentController::class, 'edit']);
    Route::get('post-content/index', [PostContentController::class, 'index']);
    Route::post('post-content/show', [PostContentController::class, 'show']);
    Route::delete('post-content/{post_content_id}', [PostContentController::class, 'destroy']);
    Route::get('post-content/show_post_of_user', [PostContentController::class, 'postContentOfUser']);
    

    Route::post('like/store', [LikeController::class, 'store']);
    Route::post('comment/store', [CommentController::class, 'store']);
    Route::delete('comment/{comment_id}', [CommentController::class, 'destroy']);
    Route::post('comment/sub-comment/store', [SubCommentController::class, 'store']);
    Route::post('comment/sub-comment/delete', [SubCommentController::class, 'destroy']);

   
    Route::post('user-profile/edit',[UserProfileController::class,'editUserProfile']);
    Route::post('user-profile/edit-profile-image',[UserProfileController::class,'editUserProfileImage']);
    Route::post('user-profile/edit-cover-image',[UserProfileController::class,'editUserCoverImage']);
    Route::post('user-profile/edit-bio',[UserProfileController::class,'editUserBio']);
    Route::get('user-profile/show-user-profile',[UserProfileController::class,'showUserProfile']);
    

    Route::post('education/create',[EducationController::class,'createEducation']);
    Route::get('education/show',[EducationController::class,'showEducation']);
    Route::post('subject/create',[EducationController::class,'createSubject']);
    Route::get('subject/show',[EducationController::class,'showSubject']);
    Route::post('lesson/create',[EducationController::class,'createLesson']);
    Route::get('lesson/show',[EducationController::class,'showLesson']);
    Route::post('lessonDetail/create',[EducationController::class,'createLessonDetail']);
    Route::get('lessonDetail/show',[EducationController::class,'showLessonDetail']);
    
    Route::post('lessonDetail/import',[ExcelLessonDetailController::class,'import']);

   
});
