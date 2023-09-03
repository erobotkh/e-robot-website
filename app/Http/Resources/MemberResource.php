<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MemberResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return [
            'name' => $this->name,
            'bio' => $this->bio,
            'profile' => $this->profile,
            'member_position_id' => $this->member_position_id,
            'team_id' => $this->team_id
        ];
    }
}
