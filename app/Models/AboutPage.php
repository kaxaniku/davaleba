<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    public $timestamps = false;

    use HasFactory;

    protected $table = 'about';

    protected $fillable = [
        'title',
        'S_text',
        'text',
    ];
}
