<?php

namespace App\Http\Controllers;

use App\Models\PostContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostContentController extends Controller
{
    public function index()
    {
        $data = DB::table('post_contents')
            ->select('post_contents.*', 'categories.category_name')
            ->join('categories', 'categories.id', '=', 'post_contents.category_id')
            ->get();

    
        return view('AdminModules.PostContent.index', [
            'data' => $data
        ]);
    }
    public function store(Request $request)
    {

        $image_name = $request->file("image_name");
        $url = " ";
        if ($image_name) {
            $url = Storage::disk('do')->putFile(
                "erobot/PostContent-image",
                $image_name,
                'public'
            );
        }
        $this->validate($request, [
            "title" => 'required',
            "category_id" => 'required',
            "image_name" => "required|image|mimes:jpeg,jpg,png",
        ]);

        $this->create([
            "title" => $request->title,
            "category_id" => $request->category_id,
            "image_name" => $url,
        ]);

        return redirect()->route('postContent.index');
    }
    public function edit($id)
    {
        $data = PostContent::find($id);
        return view('AdminModules.PostContent.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        PostContent::find($id)->update($request->all());
        return redirect()->route('postContent.index');
    }
    public function destroy($id)
    {
        $data = PostContent::find($id)->delete($id);
        return redirect()->route('postContent.index', compact('data'));
    }
}
