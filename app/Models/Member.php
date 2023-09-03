<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\Notifiable;

class Member extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'bio',
        'profile',
        'member_position_id',
        'team_id'
    ];
    public function member_position(): HasOne
    {
        return $this->hasOne(MemberPosition::class);
    }
    public function socails(): HasMany
    {
        return $this->hasMany(Socail::class);
    }
    public function team(): HasOne
    {
        return $this->hasOne(Team::class);
    }
}
