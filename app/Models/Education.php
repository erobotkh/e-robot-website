<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Education extends Model
{
    use HasFactory,Notifiable;
    protected $table='educations';
    protected $fillable=['title','description','icon','is_enable','begin_color','end_color',];
}
