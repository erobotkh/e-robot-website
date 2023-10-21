<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class achievment extends Model
{
    use HasFactory;

    protected $fillable = [
        'num_member',
        'num_student',
        'num_intership',
        'num_social_impact',
        'num_province',
        'num_project',
    ];
}
