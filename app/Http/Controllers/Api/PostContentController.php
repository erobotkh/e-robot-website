<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostContentResource;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Like;
use App\Models\PostContent;
use App\Models\SubComment;
use App\Models\User;
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
            "total" => $data->total(),
        ], "Successfully");

       
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
        $rule = [
            'title' => 'required',
            'description' => 'nullable',
            'image_file' => 'required|image|max:10240',
            'category_id' => 'required'
        ];

        $input = $request->only('title', 'description', 'image_file', 'category_id');
        $validator = Validator::make($input, $rule);
        if ($validator->fails()) {
            return $this->sendError("Post Fail", $validator->messages());
        }

        $title = $request->title;
        $description = $request->description;
        $category_id = $request->category_id;
        $user_id = Auth::id();
        $image_file = $request->image_file;
        $url = Storage::disk('do')->putFile(
            "erobot/post-content",
            $image_file,
            'public'
        );
        $data = PostContent::create(['title' => $title, 'description' => $description, 'image_name' => $url, 'category_id' => $category_id, 'user_id' => $user_id]);
        return $this->sendResponse($data, "Post Successfully");
    }
    public function edit(Request $request)
    {
        $rule = [
            'title' => 'required',
            'description' => 'nullable',
            'category_id' => 'required',
            'post_id'=>'required'
        ];
        // dd($request);
        $input = $request->only('title', 'description', 'category_id','post_id');
        $validator = Validator::make($input, $rule);
        if ($validator->fails()) {
            return $this->sendError("Post Fail", $validator->messages());
        }

        $title = $request->title;
        $description = $request->description;
        $category_id = $request->category_id;
        $user_id = Auth::id();
       
        if(PostContent::where(['id'=>$request->post_id])->first()){
            // dd(PostContent::where(['id'=>$request->post_id])->first());
            $data = PostContent::where(['id'=>$request->post_id])->first();
            $data->update(['title' => $title, 'description' => $description, 'category_id' => $category_id, 'user_id' => $user_id]);
            return $this->sendResponse($data, "Update Successfully");
        }else{
            return $this->sendError( "Update Fail");
        }
      
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $this->validate($request, ['category_id' => 'required']);
        $data = PostContent::withCount([
            'likes',
            'comments',
            'sub_comments'
        ])->where('category_id', $request->category_id)->orderBy('updated_at', 'desc')->paginate(10);
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

    /**
     * Show the form for editing the specified resource.
     */
    public function postContentOfUser()
    {
        $data = PostContent::withCount([
            'likes',
            'comments',
            'sub_comments'
        ])->where('user_id',Auth::id())->orderBy('updated_at', 'desc')->paginate(10);
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

    }
    public function postContentOfAnotherUser($id)
    {
        $data = PostContent::withCount([
            'likes',
            'comments',
            'sub_comments'
        ])->where('user_id',$id)->orderBy('updated_at', 'desc')->paginate(10);
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
    public function destroy($post_content_id)
    {
        $post = PostContent::where(['id' => $post_content_id])?->delete();

        if ($post) {
            return $this->sendResponse($post, "Delete Successfully");
        }
        return $this->sendError("Fail");
    }
}
