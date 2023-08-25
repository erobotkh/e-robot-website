<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Validator;

class UserProfileController extends Controller
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
    public function editUserProfile(Request $request)
    {
        $rule = [
            'bio' => 'nullable',
            'profile_image' => 'required|image|max:10240',
            'cover_image' => 'required|image|max:10240'
        ];

        $input = $request->only('bio', 'profile_image', 'cover_image');
        $validator = Validator::make($input, $rule);
        if ($validator->fails()) {
            return $this->sendError("Post Fail", $validator->messages());
        }


        $bio = $request->bio;
        $profile_image = $request->profile_image;
        $cover_image = $request->cover_image;
        $url_profile = Storage::disk('do')->putFile(
            "erobot/user-profile",
            $profile_image,
            'public'
        );
        $url_cover = Storage::disk('do')->putFile(
            "erobot/user-cover",
            $cover_image,
            'public'
        );
        $user_profile = UserProfile::where('user_id', Auth::id())->first();
        if ($user_profile == null) {
            $data = UserProfile::create(['bio' => $bio, 'profile_image' => $url_profile, 'cover_image' => $url_cover, 'user_id' => Auth::id()]);
            return $this->sendResponse($data, "Create Successfully");
        }else{
            $user_profile->bio=$bio;
            $user_profile->profile_image=$url_profile;
            $user_profile->cover_image=$url_cover;
            $user_profile->update();
            $data=$user_profile;
            return $this->sendResponse($data, "Update Successfully");
        }
        
    }
    public function showUserProfile()
    {
        $data = User::find(Auth::id())->user_profiles;
        $user = User::where('id', Auth::id())->first();
        if($data==null){
            $data['id']=0; 
            $data['user_id'] =$user->id;
            $data['first_name'] = $user->first_name;
            $data['last_name'] = $user->last_name;
            $data['bio']="";
            $data['profile_image']="";
            $data['cover_image']="";
            $data['profile_image_url']="";
            $data['cover_image_url']="";
            $data['create_at']="";
            $data['update_at']="";
        }else{
            $data['id']=$data->id; 
            $data['user_id'] =$user->id;
            $data['first_name'] = $user->first_name;
            $data['last_name'] = $user->last_name;
            $data['bio']=$data->bio;
            $data['profile_image']=$data->profile_image;
            $data['cover_image']=$data->cover_image;
            $data['profile_image_url']=$data->profile_image_url;
            $data['cover_image_url']=$data->cover_image_url;
            $data['create_at']=$data->created_at;
            $data['update_at']=$data->updated_at;
        }
        
        

        return $this->sendResponse($data, "Successfully");
    }
    public function showProfile($id)
    {
        User::find($id)?->user_profiles;
    }
}
