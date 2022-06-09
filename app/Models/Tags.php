<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Posts;

class Tags extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'tags';

    protected $fillable = ['name'];

    public function posts() {
        return $this->belongsToMany(Posts::class, 'post_tag', 'tag_id', 'post_id');
    }
}
