<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class PostContent extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        'title',
        'description',
        'image_name',
        'category_id',
        'user_id'
    ];
    protected $appends = ['image_path'];

    public function getImagePathAttribute() {
        return env('DO_URL').$this->image_name;
    }
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function category():BelongsTo{
        return $this->belongsTo(Category::class);
    }
    public function likes():HasMany{
        return $this->hasMany(Like::class);
    }
    public function comments():HasMany{
        return $this->hasMany(Comment::class);
    }
    public function sub_comments():HasMany{
        return $this->hasMany(SubComment::class);
    }
}
