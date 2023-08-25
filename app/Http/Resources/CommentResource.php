<?php

namespace App\Http\Resources;

use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return 
    [
        'id'        => $this->id,
        'comment_user'      => $this->when(true,function(){
            $data=UserProfile::where('user_id', $this->user->id)->first();
            return ['id'=>$this->user->id,'first_name' => $this->user['first_name'],
            'last_name' => $this->user['last_name'],'comment_user_profiles' => $data?->profile_image_url];
        }),

        'comment_text'      => $this->comment_text,
        'sub_comment'=> SubCommentResource::collection($this->sub_comments),
        'created_at'    => $this->created_at,
        'updated_at'    => $this->updated_at,
    
    ];
    }
}
