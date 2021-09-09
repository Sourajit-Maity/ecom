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
        'product_slug',
        'product_category',
        'user_id',
        'active',
        'price',
        'product_photo_path',
        'deleted_at',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function productprice()
    {
        return $this->hasOne(ProductPrice::class);
    }
}
