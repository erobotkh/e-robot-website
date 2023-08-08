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
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
