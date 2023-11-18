<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category_id',
        'image',
    ];
    public function getImagePathAttribute() {
        return env('DO_URL').$this->image;
    }
    public function category()
    {
        return $this->belongsTo(Category::class); 
    }
}
