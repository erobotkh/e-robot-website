<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Like extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        'user_id',
        'post_content_id'
    ];
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function postcontent():BelongsTo{
        return $this->belongsTo(PostContent::class);
    }
}
