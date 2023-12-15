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
        'sub_title',
        'date'
    ];

    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['search'])) {

            $query->where('title', 'like', '%' . $filters['search'] . '%');
            
        }else if (isset($filters['filter'])) {

            if($filters['filter'] != 'default'){
                $query->where('category_id', $filters['filter']);
            }
                
        }else if(isset($filters['sort'])){

            if($filters['sort'] != 'default'){
                switch ($filters['sort']) {
                    case 'titleA-Z':
                      $query->orderBy('title','ASC');
                      break;
                    case 'titleZ-A':
                        $query->orderBy('title','DESC');
                      break;
                    case 'latest':
                        $query->orderBy('created_at','DESC');
                    break;
                    case 'oldest':
                        $query->orderBy('created_at','ASC');
                  }
            }
           
        }
  
    }

    public function getImagePathAttribute() {
        return env('DO_URL').$this->image;
    }
    public function category()
    {
        return $this->belongsTo(Category::class); 
    }
}
