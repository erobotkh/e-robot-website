<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
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
    public function store(Request $request)
    {
        $this->validate($request, ['post_content_id' => 'required']);
        $user_id = Auth::id();
        $post_content_id = $request->post_content_id;
        $like = Like::where(['user_id' => $user_id, 'post_content_id' => $post_content_id])->first();

        if ($like != null) {
            $like?->delete();
            return $this->sendResponse($like, "UnLiked Successfully");
        } else {
            $data = Like::create(['user_id' => $user_id, 'post_content_id' => $post_content_id]);
            return $this->sendResponse($data, 'Liked Successfully');
        }
    }
}
