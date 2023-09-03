<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class AuthController extends Controller
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
    public function register(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email'    => 'unique:users|required',
            'phone' => 'required',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ];
        $input     = $request->only('name', 'email', 'phone', 'password', 'c_password');
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return $this->sendError("Resgister Fail.", $validator->messages());
        }
        $name = $request->name;
        $email    = $request->email;
        $password = $request->password;
        $phone = $request->phone;
        $user     = User::create(['name' => $name, 'email' => $email, 'phone' => $phone, 'password' => Hash::make($password)]);
        return $this->sendResponse($user, "User register successfully");
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $request['email'])->first();
        if (!isset($user)) {
            return $this->sendError('User does not exist with this details');
        }
        if (!Hash::check($request['password'], $user['password'])) {
            return $this->sendError('Incorrect user credentials');
        }
        $success['userid'] = $user->id;
        $success['token'] = $user->createToken('AuthToken')->accessToken;


        return $this->sendResponse($success, "User login Successfully");
    }
    public function logout()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $user->tokens()->where('revoked', false)->delete();
            return $this->sendResponse(null, 'Logout Success');
        } else {
            return $this->sendError('Unauthenticated.');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
