<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Socail extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        'icon',
        'name',
        'link',
        'member_id'
    ];
    protected $appends = ['icon_url'];

    public function getIconUrlAttribute() {
        return env('DO_URL').$this->icon;
    }
    public function member():BelongsTo{
        return $this->belongsTo(Member::class);
    }
}
