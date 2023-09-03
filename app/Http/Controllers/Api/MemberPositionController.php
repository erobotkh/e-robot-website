<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MemberPosition;
use Illuminate\Http\Request;

class MemberPositionController extends Controller
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
            'title' => 'required'
        ]);
        $data = MemberPosition::create(['title' => $request->title]);
        return $this->sendResponse($data, "Successfully");
        dd($data);
    }
}
