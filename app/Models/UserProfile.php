<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class UserProfile extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        'profile_image',
        'cover_image',
        'bio',
        'user_id'
    ];
    protected $appends = ['profile_image_url','cover_image_url'];

    public function getProfileImageUrlAttribute() {
        return env('DO_URL').$this->profile_image;
    }

    public function getCoverImageUrlAttribute() {
        return env('DO_URL').$this->cover_image;
    }
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
