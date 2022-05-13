<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPage extends Model
{
    public $timestamps = false;

    use HasFactory;

    protected $table = 'contact';

    protected $fillable = [
        'title',
        'S_text',
        'text',
        'C_address',
        'C_info'
    ];
}
