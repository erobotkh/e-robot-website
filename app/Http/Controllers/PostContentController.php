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
        $postContent = new PostContent;
        $postContent->title = $request->input('title');
        $postContent->discription = $request->input('discription');
        $postContent->category_id = $request->input('category_id');

        if ($request->hasFile('image_name')) {
            $file = $request->file('image_name');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images', $filename);
            $postContent->image_name = $filename;
        }

        $postContent->save();
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
