<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' , 'is_active'
    ];
    public function getActive(){
        return $this->is_active == 0 ? 'Not activated' : 'Activated ';
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
    public function posts(){
        return $this->hasMany(Post::class,'category_id');
    }
}
