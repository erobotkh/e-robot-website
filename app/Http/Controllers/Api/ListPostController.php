<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\PostContent;
use App\Models\SubComment;
use App\Models\User;
use Illuminate\Http\Request;

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
        $datas = PostContent::orderBy('updated_at', 'desc')?->get();
        foreach ($datas as $data) {
            $users = PostContent::find($data->user_id)?->user;
            $user_profiles = User::find($data->user_id)?->user_profiles;
            $likes = PostContent::find($data->id)?->likes;
            $comments = PostContent::find($data->id)?->comments;
            foreach ($comments as $comment) {
                $sub_comment_numbers = SubComment::where('comment_id', $comment->id)->where('post_content_id', $data->id)?->get();
                $comment['sub'] = $sub_comment_numbers->count();
                $data['total_sub_comment'] += $comment['sub'];
            }
            $data['total_comment'] = $comments->count();
            $data['user_name'] = $users->name;
            $data['user_profile'] = $user_profiles->profile_image_url;
            $data['like_number'] = $likes->count();
        }
        return $this->sendResponse($datas, "Successfully");
    }

    public function show(Request $request)
    {
        $this->validate($request, ['category_id' => 'required']);
        $category_id = $request->category_id;
        $datas = PostContent::where('category_id',$category_id)->orderBy('updated_at', 'desc')?->get();
        foreach ($datas as $data) {
            $users = PostContent::find($data->user_id)?->user;
            $user_profiles = User::find($data->user_id)?->user_profiles;
            $likes = PostContent::find($data->id)?->likes;
            $comments = PostContent::find($data->id)?->comments;
            foreach ($comments as $comment) {
                $sub_comment_numbers = SubComment::where('comment_id', $comment->id)->where('post_content_id', $data->id)?->get();
                $comment['sub'] = $sub_comment_numbers->count();
                $data['total_sub_comment'] += $comment['sub'];
            }
            $data['total_comment'] = $comments->count();
            $data['user_name'] = $users->name;
            $data['user_profile'] = $user_profiles->profile_image_url;
            $data['like_number'] = $likes->count();
        }

        return $this->sendResponse($datas, "Successfully");
    }
}
