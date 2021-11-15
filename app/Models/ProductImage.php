<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_images',
        'products_id',       
    ];

    public function productcategory(){
        return $this->belongsTo(Product::class);
    }
}
