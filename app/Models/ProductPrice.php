<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductPrice extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name',
        'slug',
        '1-5',
        '6-15',
        '16-25',
        '26-50',
        '51-100',
        '101-199',
        '200-499',
        '500+',
        'magnet',
        'pin',
        'swivel_clip',
        'deleted_at', 
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    // public function product(){
    //     return $this->belongsTo(Product::class);
    // }
}
