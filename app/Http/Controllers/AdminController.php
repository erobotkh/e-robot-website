<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function GoLogin(){
        return view('user.login');
    }
    public function Login(Request $request){
        $this->validate($request,[
            'phone'=>'required',
            'password'=>'required',
        ]);
        $phone= $request->phone;
        $password = $request->password;

        if( Auth::attempt([
            'phone'=>$phone,
            'password'=>$password,
        ]) && $phone == "010567014" && $password ="E-Robot_@dmin"){
            return redirect('/admin')->with('userID','');
        }else{
            return redirect('/login');
        }

    }
    public function GoSignup(){
        return view('user.register');

    }


    public function Signup(Request $request){
        $this->validate($request,[
            "first_name"=>'required',
            "last_name"=>'required',
            "phone"=>'required',
            'password'=>'required',

            // 'email'=>'required',
            // 'profile'=>'required'
        ]);

        $fname = $request->first_name;
        $lname = $request->last_name;
        $phone = $request->phone;
        $password = $request->password;

        // $email = $request->email;
        // $profile = $request->file('profile');

        // if(!empty($profile)){
        //     $new_profile = time().'-'.$profile->getClientOriginalName();
        //     $path = 'assets/user';
        //     $profile->move($path, $new_profile);
        // }
        $user = User::create([
            'first_name'=>$fname,
            'last_name'=>$lname,
            'phone'=>$phone,
            // 'email'=>$email,
            'password'=>Hash::make($password),
            // 'profile'=>$new_profile
        ]);

        return redirect('/login')->with('success','');
    }

    public function GoLogout(){

        Auth::logout();

        return redirect('/login')->with('success','');

    }

}
