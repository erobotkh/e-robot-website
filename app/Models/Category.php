<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use App\Models\Resource;
class Category extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'category_name'
    ];

    public function postcontents(): HasMany
    {
        return $this->hasMany(PostContent::class);
    }
    public function resource(): HasMany
    {
        return $this->hasMany(Resource::class);
    }
}


// 1 category has many postContent
// 1 post has many comments
// Many to many (SubComment and Comment)

// (PostContent, and Comment, and User)