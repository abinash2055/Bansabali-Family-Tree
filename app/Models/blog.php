<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'bansabali.blogs'; 
    protected $connection = 'mysql'; 
    protected $fillable = ['title', 'image', 'content'];
}
