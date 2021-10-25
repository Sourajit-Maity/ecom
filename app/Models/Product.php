<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'product_name',
        'user_id', 
        'price',
        'product_description',
        'product_photo_path',
        'product_features',
        'deleted_at',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function productprice()
    {
        return $this->hasMany(ProductPrice::class);
    }
}
