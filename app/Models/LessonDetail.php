<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonDetail extends Model
{
    use HasFactory;
    protected $table = 'lesson_details';
    protected $fillable = [
        'title',
        'header',
        'image_type',
        'image',
        'body',
        'sub_body',
        'conclusion',
        'lesson_id'
    ];
}
