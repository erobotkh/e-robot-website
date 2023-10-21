<?php

namespace App\Http\Controllers;

use App\Models\member;
use App\Models\MemberPosition;
use App\Models\Socail;
use App\Models\Team;
use Illuminate\Http\Request;

class viewMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_member = Member::select('members.*','member_positions.title')
        ->join('member_positions', 'member_positions.id','=','members.member_position_id');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show()
    {
        $data_member = Member::select('members.*','member_positions.title','teams.name')
        ->join('member_positions', 'member_positions.id','=','members.member_position_id')
        ->join('teams', 'teams.id','=','members.team_id')
        ->get();

        $social_member = Member::select('socails.member_id','socails.name','socails.link')
        ->join('socails', 'member_id','=','members.id')
        ->get();

        // foreach ($data_member as $value) {
        //     $team = Team::where('id', $value->team_id)->first();
        //     $value->team_name = $team->name;
        //     $member_position = MemberPosition::where('id', $value->member_position_id)->first();
        //     $value->member_position_title = $member_position->title;
        //     $value->socail = Member::find($value->id)->socails()->get();
        // }
        return view('about.team-leader',compact('data_member','social_member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(member $member)
    {
        //
    }
}
