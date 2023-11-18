<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class TeamController extends Controller
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
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'cover'=>'required|image|max:10240',
            'bio'=>'required'
        ]);
        $image_file = $request->cover;
        $url = Storage::disk('do')->putFile(
            "erobot/team",
            $image_file,
            'public'
        );
        $data=Team::create(['name'=>$request->name,'cover'=>$url,'bio'=>$request->bio]);
        return $this->sendResponse($data,"Successfully");
    }
    public function show(){
        $data=Team::all();
        return $this->sendResponse($data,"Successfully");
    }
    
}
