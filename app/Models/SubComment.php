<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class SubComment extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'user_id', 
        'post_content_id',
        'sub_comment_text',
        'comment_id'
    ];
    public function comment():BelongsTo{
        return $this->belongsTo(Comment::class);
    }
    public function postcontent():BelongsTo{
        return $this->belongsTo(PostContent::class);
    }
}
