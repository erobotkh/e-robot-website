<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'unique:users|required',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ];

        $input  = $request->only('first_name', 'last_name', 'phone', 'password', 'c_password');
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $password = Hash::make($request->password);
        $phone = $request->phone;

        $user_db = User::where('phone', $phone)->first();

        if ($user_db) {
            return $this->sendError("Phone already exit.", $validator->messages());
        } else {

      
            session([
                'user_' . $phone => [
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'password' => $password,
                    'phone' => $phone,
                ]
            ]);

            session(['phone' => $phone]);
            return redirect()->route('user.sendOtpForm');

        }
    }
  

    public function logout(Request $request)
    {
    
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('user.loginForm')->with('message', 'You have been logged out!');

    }

    public function login(Request $request)
    {
       
        $formFiled = $request->validate([
            'phone' => 'required',
            'password' => 'required'
        ]);
      
        $user = User::where('phone', $request->phone)->first();
        
        if (!isset($user)) {
            return back()->with('error','Incorrect user credentials')->withInput();
        }

        if (!Hash::check($request['password'], $user['password'])) {
            return back()->with('error','Incorrect user credentials')->withInput();
        }
        
        Auth::login($user);
        return redirect()->route('home')->with('success', "User login Successfully");

    }

    public function sendOtp(Request $request)
    {
        $rules = [
            'phone' => 'required'
        ];
        $input = $request->only('phone');
        $validator = Validator::make($input, $rules);
        
        if($validator->fails()){
            return back()->withErrors($validator);
        }
        $phone = $request->phone;
  
        $expirationTime = 1; // 1 minute
        
        // Check if the OTP code has already been sent for this phone number.
        $phoneCache = session()->get('phone_' . $phone);
    
        if ($phoneCache) {
            return redirect()->route('user.verify_otpForm')->with('error','OTP code already sent. Please wait for 1 minute to resend.');
        }

        // // Generate a random OTP code.
        $otpCode = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
 
        $phoneTrim = Str::of($phone)->ltrim('0');

      //  Send the OTP code to the user's phone number.
        Http::withHeaders([
            'X-Secret' => config('plasgate.x_secret'),
            'Content-Type' => 'application/json',
        ])->post('https://cloudapi.plasgate.com/rest/send?private_key=' . config('plasgate.private_key'), [
            "sender" => "SMS Info",
            "to"  => "855" . 964138003,
            "content" => '" ' . $otpCode . ' "' . ' is your verification code.'
        ]);
      
        session()->put('otp_code_' . $phone, $otpCode, now()->addMinutes($expirationTime));
        session()->put('phone_' . $phone,  $phone, now()->addMinutes($expirationTime));
        session(['expiration_time_' . $phone => $expirationTime]);
        
        return redirect()->route('user.verify_otpForm');
    }

    public function verifyOtp(Request $request)
    {
        $rules = [
            'otp_code' => 'required',
            'phone' => 'required'
        ];
    
        $input = $request->only('otp_code','phone');
        $validator = Validator::make($input, $rules);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $phone = $request->phone;
     
        $otpCode = session()->get('otp_code_' . $phone);

        $user = session()->get('user_' . $phone);

       
        if (!$otpCode) {
            return back()->with("error","Otp code not found");
        }

        if ($request->otp_code == $otpCode) {
          
            if ($user) {
                //store user
                $data = User::create($user);
                //login user
                Auth::login($data);
                return redirect()->route('home')->with('success', "User login Successfully");
            }
            return redirect()->route('home')->with('error', "User login not Successfully");
        } else {
            return back()->with("error","Otp is invalid");
        }
    }

}