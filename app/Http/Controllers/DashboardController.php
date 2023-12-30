<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\PostContent;
use App\Models\Resource;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $postContents = PostContent::count();
        $resources = Resource::count();
        $users = User::count();
        $members= Member::count();

        if(!$postContents){
            $postContents =0;
        }
        if(!$resources){
            $resources = 0;
        }
        if(!$users){
            $users = 0;
        }
        if(!$members){
            $members = 0;
        }

        return view('NiceAdmin.index',compact("postContents","resources","users","members"));    }
}
