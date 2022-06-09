<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;
use App\Models\Comment;
use App\Models\Tags;

class Posts extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'S_text',
        'text',
        'img',
        'slug',
        'category_id'
    ];

    public function categories()
    {
        return $this->hasOne(Categories::Class, 'id', 'category_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::Class, 'post_id', 'id');
    }

    public function tags() 
    { 
        return $this->belongsToMany(Tags::class, 'post_tag', 'post_id', 'tag_id');
    }
}
