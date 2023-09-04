<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'             =>  $this->id,
            'user_id'           => $this->user->id,
            'user'           => $this->user,
            'profile_image'  => $this->profile_image_url,
            'cover_image'    => $this->cover_image,
            'bio'            => $this->bio,
            'created_at'    => $this->created_at,
            'updated_at'    => $this->updated_at,

        ];
    }
}
