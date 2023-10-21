<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\PostContent;
use App\Models\Comment;
use App\Models\SubComment;

use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\select;

class ViewActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $viewActivity = DB::table('post_contents as pc')
            ->leftJoin(DB::raw('(SELECT post_content_id, COUNT(*) as like_count FROM likes GROUP BY post_content_id) as lk'), 'pc.id', '=', 'lk.post_content_id')
            ->leftJoin(DB::raw('(SELECT post_content_id, COUNT(*) as comment_count FROM comments GROUP BY post_content_id) as cm'), 'pc.id', '=', 'cm.post_content_id')
            // ->leftJoin(DB::raw('(SELECT post_content_id, COUNT(*) as sub_comment_count FROM sub_comments GROUP BY post_content_id) as sbcm'), 'pc.id', '=', 'sbcm.post_content_id')
            ->select(
                'pc.*',
                DB::raw('IFNULL(lk.like_count, 0) as like_count'),
                DB::raw('IFNULL(cm.comment_count, 0) as comment_count'),
                // DB::raw('IFNULL(sbcm.sub_comment_count, 0) as sub_comment_count'),
            )
        ->get();

        $category = PostContent::select('post_contents.category_id', 'categories.id AS c_id', 'categories.category_name as c_name')
                ->join('categories', 'post_contents.category_id', '=', 'categories.id')
                ->groupBy('post_contents.category_id')
        ->get();

        $category = Category::select('categories.id as c_id', 'categories.category_name as c_name')->get();


        if(empty($viewActivity)){
            $viewActivity = new PostContent();
        }
        if(empty($category)){
            $category = new Category();
        }

        // use compact() for push data from function index to viewProdcut file
        return view('list_content', compact('viewActivity','category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return ;
    }

    /**
     * Display the specified resource.
     */
    public function show(PostContent $PostContent,$postId,$category_id)
    {
        // $category_id =$_GET['category_id'];

        $detailContent = DB::table('post_contents as pc')
            ->leftJoin('users', 'pc.user_id', '=', 'users.id')
            ->leftJoin('user_profiles as uspf','users.id','=','uspf.user_id')
            ->leftJoin(DB::raw('(SELECT post_content_id, COUNT(*) as like_count FROM likes GROUP BY post_content_id) as lk'), 'pc.id', '=', 'lk.post_content_id')
            ->leftJoin(DB::raw('(SELECT post_content_id, COUNT(*) as comment_count FROM comments GROUP BY post_content_id) as cm'), 'pc.id', '=', 'cm.post_content_id')
            ->leftJoin(DB::raw('(SELECT post_content_id, COUNT(*) as sub_comment_count FROM sub_comments GROUP BY post_content_id) as sbcm'), 'pc.id', '=', 'sbcm.post_content_id')
            ->select(
            'pc.*',
            DB::raw('IFNULL(lk.like_count, 0) as like_count'),
            DB::raw('IFNULL(cm.comment_count, 0) as comment_count'),
            DB::raw('IFNULL(sbcm.sub_comment_count, 0) as sub_comment_count'),
            'first_name','last_name','profile_image'
        )->where('pc.id',$postId)->first();

        $comments = DB::table('post_contents as pc')
            ->leftJoin('comments as cm', 'pc.id', '=', 'cm.post_content_id')
            ->leftJoin('users', 'users.id', '=', 'cm.user_id')
            ->select('cm.*','users.first_name','users.last_name')
            ->where('pc.id', $postId)
        ->get();

        // $thumbnail = PostContent::select('post_contents.*', 'categories.id AS c_id', 'categories.category_name as c_name')
        //     ->join('categories', 'post_contents.category_id', '=', 'categories.id')
        //     ->take(3)
        // ->get();

        // $categoryId = PostContent::select('post_contents.category_id')
        // ->where('post_contents.id', $postId)->take(1)
        // ->first();
        // echo $category_id;

        $thumbnail = PostContent::select('post_contents.id', 'post_contents.title', 'categories.id AS c_id', 'categories.category_name AS c_name')
        ->join('categories', 'post_contents.category_id', '=', 'categories.id')
        ->where('post_contents.category_id',$category_id)
        ->orderBy('post_contents.id')
        ->limit(3)
        ->get();



        // $category = Category::select('categories.id as c_id', 'categories.category_name as c_name')->get();


        // $comments = DB::table('post_contents as pc')
        //     ->leftJoin('comments as cm', 'pc.id', '=', 'cm.post_content_id')
        //     ->leftJoin('sub_comments as sbcm', 'cm.id', '=', 'sbcm.comment_id')
        //     ->leftJoin('users', 'users.id', '=', 'cm.user_id')
        //     ->select('cm.*','users.first_name','users.last_name')
        //     ->where('pc.id', $postId)
        // ->get();

        if(empty($detailContent)){
            $detailContent = new PostContent();
        }
        if(empty($comments)){
            $comments = new Comment();
        }
        if(empty($thumbnail)){
            $thumbnail = new PostContent();
        }

        return view('detail_content',compact('detailContent','comments','thumbnail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostContent $PostContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PostContent $PostContent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostContent $PostContent)
    {
        //
    }
}
