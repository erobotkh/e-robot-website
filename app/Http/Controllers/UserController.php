<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){
        $users = User::all();
        $countUser = User::count();
        if(empty($users)){
            $users = new user();
        }
        if(empty($countUser)){
            $countUser = 0;
        }
        return view("AdminModules.User.index",compact('users','countUser'));
    }
    public function searchUser(Request $request){
        $searchKey = $request->searchKey;

        $users = User::where('phone', 'LIKE', "%$searchKey%")->get();
        $countUser = User::count();
        if(empty($users)){
            $users = new user();
        }
        if(empty($countUser)){
            $countUser = 0;
        }
        return view("AdminModules.User.index",compact('users','countUser'));
    }
}
