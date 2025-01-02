<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'bansabali.Table.member'; 
    protected $connection = 'mysql'; 
    protected $fillable = ['name', 'category', 'email', 'image'];
}
