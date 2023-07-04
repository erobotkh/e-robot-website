<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PostContent;
use Illuminate\Http\Request;

class ListPostController extends Controller
{public function sendResponse($result, $message)
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
    public function index(){
        $data=PostContent::all();
        return $this->sendResponse($data,"Successfully");
    }

    public function show(Request $request){
        $this->validate($request,['category_id'=>'required']);
        $category_id=$request->category_id;
        $data=Category::find($category_id)?->postcontents;
        return $this->sendResponse($data,"Successfully");
    }
}
