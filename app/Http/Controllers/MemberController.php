<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Socail;
use Illuminate\Http\Request;
use TheSeer\Tokenizer\Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        $this->validate($request,[
            'first_name'=>'required',
            'last_name'=>'required',
            'bio'=>'required',
            'profile'=>'required',
            'member_position_id'=>'required',
            'team_id'=>'required',
        ]);
            $profile = $request->file('profile');
            $url = Storage::disk('do')->putFile(
                "erobot/member-profile",
                $profile,
                'public'
            );

            $data = Member::create([
                'first_name' => $request->first_name,
                "last_name" => $request->last_name,
                'bio' => $request->bio,
                'profile' => $url,
                'member_position_id' => $request->member_position_id,
                'team_id' => $request->team_id
            ]);
            $m_id = Member::select('id')->orderBy('id','desc')->first();
            $linkFb =$request->facebook;
            $linkTeleg=$request->telegram;
            $linkLinkIn=$request->linkIn;

            if(!$linkFb){
                $linkFb ='https://web.facebook.com/profile.php?id=100094879493602';
            }
            if(!$linkTeleg){
                $linkTeleg='https://t.me/erobot_generalknowledge';
            }
            if(!$linkLinkIn){
                $linkLinkIn='https://www.linkedin.com/company/erobotkh';
            }
            $link=[$linkFb,$linkTeleg,$linkLinkIn];
            $linkName=['facebook','telegram','linkIn'];
            for($i =0 ; $i<3 ; $i++){
                $member_socail = Socail::create([
                    "icon"=>$linkName[$i],
                    "name"=>$linkName[$i],
                    "member_id"=>$m_id->id,
                    "link"=>$link[$i],
                ]);
            }

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
        // $data = DB::table('members')->find($id);
        $data = Member::find($id);
        return view('AdminModules.Member.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'first_name'=>'required',
            'last_name'=>'required',
            'bio'=>'required',
            'member_position_id'=>'required',
            'team_id'=>'required',
        ]);

        $profile = $request->file('profile');
        if($profile){
            $url = Storage::disk('do')->putFile(
                "erobot/member-profile",
                $profile,
                'public'
            );
        }else{
            $url = $request->old_profile;
        }


        $data = Member::find($id)->update([
            'first_name' => $request->first_name,
            "last_name" => $request->last_name,
            'bio' => $request->bio,
            'profile' => $url,
            'member_position_id' => $request->member_position_id,
            'team_id' => $request->team_id
        ]);
        return redirect()->route('member.index');
    }


    public function delete($id)
    {
        $data = DB::table('members')->find($id);
        return view('AdminModules.Member.delete');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = DB::table('members')->delete($id);
        $socail = Socail::where('member_id',$id)->delete();
        return redirect()->route('member.index');
    }
}
