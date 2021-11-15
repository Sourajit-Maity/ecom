<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'category_url',
        'category_name', 
        'category_header',
        'category_sub_header',
        'category_description',
        'category_image',
        'deleted_at',
    ];

  
    public function product()
    {
        return $this->hasMany(Product::class);
    }

}
