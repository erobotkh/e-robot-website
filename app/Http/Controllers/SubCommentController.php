<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\PostContent;
use App\Models\SubComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubCommentController extends Controller
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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, ['post_content_id' => 'required','comment_id'=>'required','sub_comment_text'=>'required']);
        $user_id = Auth::id();
        $post_content_id = $request->post_content_id;
        $comment_id=$request->comment_id;
        $sub_commet_text=$request->sub_comment_text;
        $data = SubComment::create(['user_id' => $user_id, 'post_content_id' => $post_content_id,'comment_id'=>$comment_id,'sub_comment_text'=>$sub_commet_text]);
        return $this->sendResponse($data, 'Reply Comment Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
       $this->validate($request,['post_content_id'=>'required','comment_id'=>'required']);
       $data=SubComment::where(['post_content_id'=>$request->post_content_id,'comment_id'=>$request->comment_id])->get();
       return $this->sendResponse($data,"Successfully");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $this->validate($request,['post_content_id'=>'required','comment_id'=>'required']);
        $data=SubComment::where(['user_id'=>Auth::id(),'post_content_id'=>$request->post_content_id,'comment_id'=>$request->comment_id]);
        $data?->delete();
        return $this->sendResponse(null,"Delete Successfully");
    }
}
