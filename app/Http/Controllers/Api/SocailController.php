<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Socail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SocailController extends Controller
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
            'icon'=>'required|image|max:10240',
            'name'=>'required',
            'link'=>'required',
            'member_id'=>'required'
        ]);
        $icon=$request->icon;
        $url = Storage::disk('do')->putFile(
            "erobot/socail-icon",
            $icon,
            'public'
        );
        $data=Socail::create(['icon'=>$url,'name'=>$request->name,'link'=>$request->link,'member_id'=>$request->member_id]);
        return $this->sendResponse($data,"Successfully");
    }
    public function show(){
        $data=Socail::all();
        return $this->sendResponse($data,"Successfully");
    }
}
