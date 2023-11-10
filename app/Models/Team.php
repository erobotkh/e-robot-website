<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Team extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        'name',
        'cover',
        'bio'
    ];
    protected $appends = ['cover_path'];

    public function getCoverPathAttribute() {
        return env('DO_URL').$this->cover;
    }
    public function member():BelongsTo{
        return $this->belongsTo(Member::class);
    }
}
