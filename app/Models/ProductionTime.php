<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionTime extends Model
{
    use HasFactory;
    protected $fillable = [
        'production_time_name',
        'price',
        'days', 
    ];

}
