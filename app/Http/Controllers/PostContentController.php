<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\PostContent;
use App\Models\SubComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Validator;
class PostContentController extends Controller
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
        $data=PostContent::all();
        return $this->sendResponse($data,"Successfully");
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
        $rule=['title'=>'required',
        'description'=>'nullable',
        'image_file'=>'required|image|max:10240',
        'category_id'=>'required'];
        
        $input=$request->only('title','description','image_file','category_id');
        $validator=Validator::make($input,$rule);
        if ($validator->fails()) {
            return $this->sendError("Post Fail",$validator->messages());
        }

        $title=$request->title;
        $discription=$request->discription;
        $category_id=$request->category_id;
        $user_id=Auth::id();
        $image_file=$request->image_file;
        $url = Storage::disk('do')->putFile(
            "erobot",
            $image_file,
            'public'
        );
        $data=PostContent::create(['title'=>$title,'discription'=>$discription,'image_name'=>$url,'category_id'=>$category_id,'user_id'=>$user_id]);
        return $this->sendResponse($data,"Post Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $this->validate($request,['category_id'=>'required']);
        $category_id=$request->category_id;
        $data=Category::find($category_id)->postcontents;
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
    public function destroy(PostContent $post_content_id)
    {
        dd($post_content_id);
        // $post_content=PostContent::where(['id'=>$post_content_id])->delete();
        
        // if($comment){
        //     return $this->sendError("Fail",$comment);
        // }
        
        // $sub_comment=SubComment::where(['post_content_id'=>$post_content_id]);
        // if(!asset($sub_comment)){
        //     return $this->sendError("Fail",$sub_comment);
        // }
        // $sub_comment?->delete();
        // if($post_content){
        //     return $this->sendResponse($post_content,"Delete Successfully");
        // }
        return $this->sendError("Delete Fail");
        
    }
}
