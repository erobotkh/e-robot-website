<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Comment extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        'user_id',
        'post_content_id',
        'comment_text'
    ];
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function postcontent():BelongsTo{
        return $this->belongsTo(PostContent::class);
    }
    public function sub_comments():HasMany{
        return $this->hasMany(SubComment::class);
    }
}
