<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    public function show(){

        $team = Member::Select('members.*','member_positions.title','teams.*')
                ->Where('member_position_id',1)
                ->join('teams', 'teams.id','=','members.team_id')
                ->join('member_positions', 'member_positions.id','=','members.member_position_id')
        ->get();

        if(empty($team)){
            $team = new Member();
        }

        return view("about.department" ,compact('team'));
    }
}
