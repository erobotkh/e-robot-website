<?php

namespace App\Http\Resources;

use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubCommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'sub_comment_text' => $this->sub_comment_text,

            'sub_comment_user' => $this->when(true, function () {
                $data = UserProfile::where('user_id', $this->user->id)->first();
                return
                    [
                        'id' => $this->user->id,
                        'first_name' => $this->user['first_name'],
                        'last_name' => $this->user['last_name'],
                        'sub_comment_user_profiles' => $data?->profile_image_url
                    ];
            }),
            'created_at'    => $this->created_at,
            'updated_at'    => $this->updated_at,
        ];
    }
}
