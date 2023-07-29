<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SocailLink;
use Illuminate\Http\Request;

class SocailLinkController extends Controller
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
    public function store(Request $request)
    {
        $this->validate($request, [
            'socail_id' => 'required',
            'member_id' => 'required'
        ]);
        $data = SocailLink::create(['socail_id' => $request->socail_id, 'member_id' => $request->member_id]);
        return $this->sendResponse($data,"Successfuully");
    }
}
