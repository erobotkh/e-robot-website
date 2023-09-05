<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\Notifiable;

class Member extends Model
{
<<<<<<< HEAD
    use HasFactory, Notifiable;
    protected $fillable = [
        'name',
=======
    use HasFactory,Notifiable;
    protected $fillable=[
        'first_name',
        'last_name',
>>>>>>> 418f2a6a4101532b65b43a62ce71f9992e3c1d1a
        'bio',
        'profile',
        'member_position_id',
        'team_id'
    ];
<<<<<<< HEAD
    public function member_position(): HasOne
    {
=======
    protected $appends = ['profile_url'];

    public function getProfileUrlAttribute() {
        return env('DO_URL').$this->profile;
    }
    public function member_position():HasOne{
>>>>>>> 418f2a6a4101532b65b43a62ce71f9992e3c1d1a
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
