<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->beLongsTo(User::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function getExcerptAttribute()
    {
        return substr($this->description, 0, 100). '...';
    }

    public function getTitleAttribute()
    {
        return substr($this->name, 0, 50). '...';
    }

    public function similar()
    {
        return $this->where('category_id', $this->category_id)
            ->where('id', '!=', $this->id)
            ->with('user')
            ->inRandomOrder()
            ->take(2)
            ->get();
    }
}
