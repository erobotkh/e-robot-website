<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request){

        $this->validate($request,[
            'category_name'=>'required|unique:categories'
        ]);
        $data=Category::create($request->all());
        if($data){
            return response()->json(['code'=>200,"message"=>"Create Successfully",'data'=>$data]);
        }
    }
    public function show(){
        $data=Category::all();
        return response()->json(['code'=>200,'message'=>"Successfully",'data'=>$data]);
    }
}
