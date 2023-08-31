<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\MemberPosition;
use App\Models\Socail;
use App\Models\SocailLink;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;
use Validator;

class MemberController extends Controller
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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $rule = [
            'first_name' => 'required',
            'last_name' => 'required',
            'bio' => 'nullable',
            'member_position_id' => 'required',
            'team_id' => 'required',
            'profile' => 'required|image|max:10240'
        ];
        $input = $request->only('first_name','last_name', 'bio', 'profile', 'member_position_id', 'team_id');
        $validator = Validator::make($input, $rule);
        if ($validator->fails()) {
            return $this->sendError("Fail", $validator->messages());
        }
        $first_name = $request->first_name;
        $last_name=$request->last_name;
        $bio = $request->bio;
        $member_position_id = $request->member_position_id;
        $team_id = $request->team_id;
        $profile = $request->profile;
        $url = Storage::disk('do')->putFile(
            "erobot/member-profile",
            $profile,
            'public'
        );
        $data = Member::create(['first_name' => $first_name,"last_name"=>$last_name, 'bio' => $bio, 'profile' => $url, 'member_position_id' => $member_position_id, 'team_id' => $team_id]);
        return $this->sendResponse($data, "Add Member Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data_member = Member::all();
        foreach ($data_member as $value) {
            $team = Team::where('id', $value->team_id)->first();
            $value->team_name = $team->name;
            $member_position = MemberPosition::where('id', $value->member_position_id)->first();
            $value->member_position_title = $member_position->title;
            $value->socail=Member::find($value->id)->socails()->get();
        }
        return $this->sendResponse($data_member, "Successfully");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
