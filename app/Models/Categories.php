<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Posts;

class Categories extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'categories';

    protected $fillable = ['name'];

    public function post()
    {
        $this->belongsTo(Posts::Class, 'category_id' , 'id');
    }
}
