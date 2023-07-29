<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class MemberPosition extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        'title',
    ];
    public function member():BelongsTo{
        return $this->belongsTo(Member::class);
    }
    
}
