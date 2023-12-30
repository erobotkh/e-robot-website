<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Member;
use App\Models\Socail;
use Illuminate\Http\Request;
use App\Models\MemberPosition;
use Illuminate\Support\Facades\Storage;

class viewMembersController extends Controller
{


    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data_member = Member::select('members.*','member_positions.title','teams.name')
        ->join('member_positions', 'member_positions.id','=','members.member_position_id')
        ->join('teams', 'teams.id','=','members.team_id')
        ->get();

        $social_member = Member::select('socails.member_id','socails.name','socails.link')
        ->join('socails', 'member_id','=','members.id')
        ->get();

        if(empty($data_member)){
            $data_member = new Member();
        }

        if(empty($social_member)){
            $social_member = new Member();
        }

        // foreach ($data_member as $value) {
        //     $team = Team::where('id', $value->team_id)->first();
        //     $value->team_name = $team->name;
        //     $member_position = MemberPosition::where('id', $value->member_position_id)->first();
        //     $value->member_position_title = $member_position->title;
        //     $value->socail = Member::find($value->id)->socails()->get();
        // }
        return view('about.team-leader',compact('data_member','social_member'));
    }



}
