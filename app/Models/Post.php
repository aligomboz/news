<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'image', 'is_active', 'author_id', 'category_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function getActive()
    {
        return $this->is_active == 0 ? 'Not activated' : 'Activated ';
    }
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function scopeFilter($q, $request)
    {
        if ($request->has('title') && $request->title) {
            $q->where('title', 'like', '%' . $request->title . '%')->with('user', 'category')->latest();
        }

        if ($request->has('category_id') && $request->category_id) {
            $q->where('category_id', $request->category_id);
        }
    }
}
