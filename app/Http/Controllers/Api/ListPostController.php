<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostContentResource;
use App\Models\Category;
use App\Models\Comment;
use App\Models\PostContent;
use App\Models\SubComment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListPostController extends Controller
{
    public function sendResponse($result, $message)
    {
        $response = [
            'code' => 200,
            'success' => true,
            'message' => $message,
            'data'    => $result,

        ];
        return response()->json($response, 200);
    }
    public function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'code' => 404,
            'success' => false,
            'message' => $error,
            'data' => null,
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }
    public function index()
    {
        $data = PostContent::withCount([
            'likes',
            'comments',
            'sub_comments'
        ])->orderBy('updated_at', 'desc')->paginate(10);
        return $this->success([
            'post_content_data' => [
                'post_content_list' => PostContentResource::collection($data)
            ],

            'current_page' => $data->currentPage(),
            'first_page_url' => $data->url(1),
            'from' => ($data->currentPage() - 1) * $data->perPage() + 1,
            'last_page' => $data->lastPage(),
            'last_page_url' => $data->url($data->lastPage()),
            'next_page_url' => $data->nextPageUrl(),
            'per_page' => $data->perPage(),
            'prev_page_url' => $data->previousPageUrl(),
            'to' => min($data->currentPage() * $data->perPage(), $data->total()),
            "total" => $data->total()
        ], "Successfully");

        // $datas = PostContent::orderBy('updated_at', 'desc')?->get();
        // foreach ($datas as $data) {
        //     User::where('id', $data->user->id)?->first();
        //     $user_profiles = User::find($data->user_id)?->user_profiles;
        //     $likes = PostContent::find($data->id)?->likes;
        //     $comments = PostContent::find($data->id)?->comments;
        //     foreach ($comments as $comment) {
        //         $sub_comment_numbers = SubComment::where('comment_id', $comment->id)->where('post_content_id', $data->id)?->get();
        //         $comment['sub'] = $sub_comment_numbers->count();
        //         $data['total_sub_comment'] += $comment['sub'];
        //     }
        //     $data['total_comment'] = $comments->count();
        //     $data['user_profile'] = $user_profiles?->profile_image_url;
        //     $data['like_number'] = $likes->count();
        //     if ($likes->count() != 0) {
        //         foreach ($likes as $like) {
        //             if ($like->user_id == Auth::id()) {
        //                 $data['isLike'] = 1;
        //             } else {
        //                 $data['isLike'] = 0;
        //             }
        //         }
        //     } else {
        //         $data['isLike'] = 0;
        //     }
        // }
        // return $this->sendResponse($datas, "Successfully");
    }

    public function show(Request $request)
    {
        $this->validate($request, ['category_id' => 'required']);
        $category_id = $request->category_id;
        $data = PostContent::withCount([
            'likes',
            'comments',
            'sub_comments'
        ])->where('category_id',$category_id)->orderBy('updated_at', 'desc')->paginate(10);
        return $this->success([
            'post_content_data' => [
                'post_content_list' => PostContentResource::collection($data)
            ],

            'current_page' => $data->currentPage(),
            'first_page_url' => $data->url(1),
            'from' => ($data->currentPage() - 1) * $data->perPage() + 1,
            'last_page' => $data->lastPage(),
            'last_page_url' => $data->url($data->lastPage()),
            'next_page_url' => $data->nextPageUrl(),
            'per_page' => $data->perPage(),
            'prev_page_url' => $data->previousPageUrl(),
            'to'=> min($data->currentPage() * $data->perPage(), $data->total()),
            "total" => $data->total()
        ], "Successfully");
        // $datas = PostContent::where('category_id', $category_id)->orderBy('updated_at', 'desc')?->get();
        // foreach ($datas as $data) {
        //     User::where('id', $data->user->id)?->first();
        //     $user_profiles = User::find($data->user_id)?->user_profiles;
        //     $likes = PostContent::find($data->id)?->likes;
        //     $comments = PostContent::find($data->id)?->comments;
        //     foreach ($comments as $comment) {
        //         $sub_comment_numbers = SubComment::where('comment_id', $comment->id)->where('post_content_id', $data->id)?->get();
        //         $comment['sub'] = $sub_comment_numbers->count();
        //         $data['total_sub_comment'] += $comment['sub'];
        //     }
        //     $data['total_comment'] = $comments->count();
        //     $data['user_profile'] = $user_profiles?->profile_image_url;
        //     $data['like_number'] = $likes->count();
        //     if ($likes->count() != 0) {
        //         foreach ($likes as $like) {
        //             if ($like->user_id == Auth::id()) {
        //                 $data['isLike'] = 1;
        //             } else {
        //                 $data['isLike'] = 0;
        //             }
        //         }
        //     } else {
        //         $data['isLike'] = 0;
        //     }
        // }

        // return $this->sendResponse($datas, "Successfully");
    }
}
