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
        'product_url', 
        'colour',
        'size',
        'matterial',
         'in_stock', 
         'price', 
         'discount_price', 
         'product_description', 
         'product_story', 
         'product_photo_path',
          'product_category_id',
        'deleted_at',
    ];

    public function productcategory(){
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }
    public function productimage()
    {
        return $this->hasMany(ProductImage::class);
    }
}
