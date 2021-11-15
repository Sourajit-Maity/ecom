<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metatable extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'meta_keyword', 
        'title',
       
    ];

}
