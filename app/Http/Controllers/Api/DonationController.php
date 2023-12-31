<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\Donator;

class DonationController extends Controller
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
    public function createDonator(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'amount'=>'required',
            "currency_type"=>"required"
        ]);
        $data=Donator::create($request->all());
        if($data){
            return response()->json(['code'=>200,"message"=>"Create Successfully",'data'=>$data]);
        }
    }
    public function showInfo(){
        $data=Donation::all();
        return response()->json(['code'=>200,'message'=>"Successfully",'data'=>$data]);
        
    }
    public function showDonator(){
        $data=Donator::all();
        return response()->json(['code'=>200,'message'=>"Successfully",'data'=>$data]);
        
    }
}
