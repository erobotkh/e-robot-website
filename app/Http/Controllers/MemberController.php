<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('members')
            ->join('teams', 'members.team_id', '=', 'teams.id')
            ->join('member_positions', 'members.member_position_id', '=', 'member_positions.id')
            ->select('members.*', 'teams.name', 'member_positions.title')
            ->orderBy('members.id', 'desc')->get();
        return view('AdminModules.Member.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AdminModules.Member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $member = new Member;
        $member->first_name = $request->input('first_name');
        $member->last_name = $request->input('last_name');
        $member->bio = $request->input('bio');
        $member->member_position_id = $request->input('member_position_id');
        $member->team_id = $request->input('team_id');

        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images', $filename);
            $member->profile = $filename;
        }


        // $request->validate([
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'bio' => 'required',
        //     'member_position_id' => 'required',
        //     'team_id' => 'required',
        //     'profile' => 'required',


        // ]);

        $member->save();
        // Member::create($request->post());
        return redirect()->route('member.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $data = DB::table('members')->find($id);
        return view('AdminModules.Member.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Member::find($id)->update($request->all());
        return redirect()->route('member.index');
    }


    public function delete($id)
    {
        $data = DB::table('members')->find($id);
        return view('AdminModules.Member.delete', compact('data'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = DB::table('members')->delete($id);
        return redirect()->route('member.index', compact('data'));
    }
}
