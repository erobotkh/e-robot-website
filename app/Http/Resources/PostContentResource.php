<?php

namespace App\Http\Resources;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

use function PHPSTORM_META\map;

class PostContentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        // dd($this);
        return [
            'id'                 => $this['id'],
            'title'              => $this['title'],
            'description'        => $this['description'],
            'image_path'         => $this['image_path'],
            'category_id'        => $this['category']['id'],
            'category_name'        => $this['category']['category_name'],
            'post_user'          => [
                                    'id' => $this['user']['id'],
                                    'first-name' => $this['user']['first_name'],
                                    'last_name' => $this['user']['last_name'],
                                    'post_user_profiles' => UserProfile::where('user_id', $this['user']['id'])->first(),
                                  ],
            'comments_count' => $this['comments_count'],
            'likes_count'        => $this['likes_count'],
            'isSave'             => 0,
            'canDelete'          => $this->when(1, function () {
                if ($this['user']['id'] == Auth::id()) {
                    return 1;
                } else {
                    return 0;
                }
            }),
            'isLike'              => $this->when(1, function () {
                if ($this['likes_count'] != 0) {
                    foreach ($this['likes'] as $data) {
                        if ($data['user_id'] == Auth::id()) {
                            return 1;
                        } else {
                            return 0;
                        }
                    }
                } else {
                    return 0;
                }
            }),

            'created_at'    => $this['created_at'],
            'updated_at'    => $this['updated_at'],
        ];
    }
}
