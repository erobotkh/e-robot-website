<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $data = DB::table('categories')->orderBy('id', 'DESC')->get();

        return view('AdminModules.Category.index', compact('data'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        Category::create($request->post());
        return redirect()->route('category.index');
    }
    public function edit($id)
    {
        $category = DB::table('categories')->find($id);
        return view('AdminModules.Category.edit', compact('category'));
    }
    public function update(Request $request, string $id)
    {
        Category::find($id)->update($request->all());
        return redirect()->route('category.index');
    }
    public function destroy(String $id)
    {
        $data = DB::table('categories')->delete($id);
        return redirect()->route('category.index', compact('data'));
    }
}
