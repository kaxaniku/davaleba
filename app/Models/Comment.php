<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Posts;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','message','post_id'];

    public function post()
    {
        return $this->belongsTo(Comment::Class, 'post_id', 'id');
    }
}
