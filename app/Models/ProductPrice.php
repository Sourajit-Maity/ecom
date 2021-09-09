<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductPrice extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'product_id',
        'product_category',
        'user_id',
        'active',
        'price',
        'price_range',
        'deleted_at',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
