<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
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
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'unique:users|required',
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
            'phone' => 'required',
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
    public function sendOtp(Request $request)
    {
        $rules = [
            'phone' => 'required'
        ];
        $input = $request->only('phone');
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return $this->sendError("Send Otp Fail.", $validator->messages());
        }

        $phone = $request->phone;
        $expirationTime = 60; // 1 minute

        // Check if the OTP code has already been sent for this phone number.
        $phoneCache = Cache::get('phone_' . $phone);
        if ($phoneCache) {
            return $this->sendError("Fail.", ['phone' => $phone, "message" => "Otp is not expire"]);
        }

        // // Generate a random OTP code.
        $otpCode = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);

        $phoneTrim = Str::of($phone)->ltrim('0');

        // Send the OTP code to the user's phone number.
        Http::withHeaders([
            'X-Secret' => config('plasgate.x_secret')
        ])->post('https://cloudapi.plasgate.com/rest/send?private_key=' . config('plasgate.private_key'), [
            "sender" => "SMS Info",
            "to"  => "855" . $phoneTrim,
            "content" => '" ' . $otpCode . ' "' . ' is your verification code.'
        ]);

        // Save the OTP code and expiration time in the cache.
        Cache::put('otp_code_' . $phone, $otpCode, $expirationTime);
        Cache::put('phone_' . $phone, $phone, $expirationTime);
        Cache::put('expiration_time_' . $phone, $expirationTime);

        return $this->sendResponse(['phone' => "", 'message' => "Otp is sent"], "Successfully");
    }

    public function verifyOtp(Request $request)
    {
        $rules = [
            'otp_code' => 'required',
            'phone' => 'required'
        ];
        $input = $request->only('otp_code', 'phone');
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return $this->sendError("Verify Fail.", $validator->messages());
        }

        $phone = $request->phone;
        $otpCode = Cache::get('otp_code_' . $phone);
        $user = Cache::get('user_' . $phone);

        if (!$otpCode) {
            return $this->sendError("Otp code not found");
        }

        if ($request->otp_code == $otpCode) {
            if ($user) {
                $data = User::create($user);
                return $this->sendResponse($data, "Register Successfully");
            }
            return $this->sendError("Register Fail");
        } else {
            return $this->sendError("Otp is invalid");
        }
    }
    public function sendOtpforgotPassword(Request $request)
    {
        $rules = [
            'phone' => 'required'
        ];
        $input = $request->only('phone');
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return $this->sendError("Send Otp Fail.", $validator->messages());
        }


        $phone = $request->phone;
        $checkPhone = User::where('phone', $phone)->first();
        if ($checkPhone == null) {
            return $this->sendError("Fail.", ['phone' => $phone, "message" => "User does not exist with this details"]);
        }

        $expirationTime = 60; // 1 minute

        // Check if the OTP code has already been sent for this phone number.
        $phoneCache = Cache::get('phone_' . $phone);
        if ($phoneCache) {
            return $this->sendError("Fail.", ['phone' => $phone, "message" => "Otp is not expire"]);
        }

        // Generate a random OTP code.
        $otpCode = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);

        $phoneTrim = Str::of($request->phone)->ltrim('0');

        // Send the OTP code to the user's phone number.
        $response_url = Http::withHeaders([
            'X-Secret' => config('plasgate.x_secret')
        ])->post('https://cloudapi.plasgate.com/rest/send?private_key=' . config('plasgate.private_key'), [
            "sender" => "SMS Info",
            "to"  => "855" . $phoneTrim,
            "content" => '" ' . $otpCode . ' "' . ' is your verification code.'
        ]);

        // Save the OTP code and expiration time in the cache.
        Cache::put('otp_code_' . $phone, $otpCode, $expirationTime);
        Cache::put('phone_' . $phone, $phone, $expirationTime);
        Cache::put('expiration_time_' . $phone, $expirationTime);

        return $this->sendResponse(['phone' => $phone, 'message' => "Otp is sent"], "Successfully");
    }
    public function verifyOtpForgotPassword(Request $request)
    {
        $rules = [
            'otp_code' => 'required',
            'phone' => 'required'
        ];
        $input = $request->only('otp_code', 'phone');
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return $this->sendError("Verify Fail.", $validator->messages());
        }


        $phone = $request->phone;

        $otpCode = Cache::get('otp_code_' . $phone);

        if (!$otpCode) {
            return $this->sendError("Otp code not found");
        }
        $checkUser = User::where('phone', $phone)->first();
        if ($checkUser == null) {
            return $this->sendError("Fail.", ['phone' => $phone, "message" => "User does not exist with this details"]);
        }


        if ($request->otp_code == $otpCode) {
            if ($checkUser) {
                Cache::put($phone . '_isVerify', 1, 60);
                return $this->sendResponse(["phone" => $phone], "Verify Successfully");
            }
            return $this->sendError("Verify Fail");
        } else {
            return $this->sendError("Otp is invalid");
        }
    }
    public function editPassword(Request $request)
    {
        $rule = [
            'phone' => 'required',
            'new_password' => 'required',
            'c_password' => 'required|same:new_password',
        ];

        $input = $request->only('phone', 'new_password', 'c_password');
        $validator = Validator::make($input, $rule);
        if ($validator->fails()) {
            return $this->sendError("Update Fail", $validator->messages());
        }
        $user = User::where('phone', $request->phone)->first();
        if ($user == null) {
            return $this->sendError("User not found");
        }
        $isVerify = Cache::get($request->phone . '_isVerify');
        if (!$isVerify) {
            return $this->sendError("User not verify");
        }
        $user->password = $request->new_password;
        $user->update();
        $data = $user;

        return $this->sendResponse($data, "Update Successfully");
    }
}
