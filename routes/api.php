<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ListPostController;
use App\Http\Controllers\PostContentController;
use App\Http\Controllers\SubCommentController;
use App\Models\PostContent;
use App\Models\SubComment;
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


Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);


Route::get('list-post-content/index', [ListPostController::class, 'index']);
Route::post('list-post-content/show', [ListPostController::class, 'show']);

Route::get('comment/{post_content_id}', [CommentController::class, 'show']);
Route::post('comment/sub-comment', [SubCommentController::class, 'show']);

Route::middleware(['auth:api'])->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);

    Route::post('category/store', [CategoryController::class, 'store']);
    Route::get('category/show', [CategoryController::class, 'show']);

    Route::post('post-content/store', [PostContentController::class, 'store']);
    Route::get('post-content/index', [PostContentController::class, 'index']);
    Route::post('post-content/show', [PostContentController::class, 'show']);
    Route::delete('post-content/{post_content_id}', [PostContentController::class, 'destroy']);

    Route::post('like/store', [LikeController::class, 'store']);

    Route::post('comment/store', [CommentController::class, 'store']);
    Route::delete('comment/{comment_id}', [CommentController::class, 'destroy']);

    Route::post('comment/sub-comment/store', [SubCommentController::class, 'store']);
    Route::post('comment/sub-comment/delete', [SubCommentController::class, 'destroy']);
});
