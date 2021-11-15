<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDetails extends Model
{
    use HasFactory;
    protected $fillable = ['customer_name','phone_no','email','address','products_id','is_deliver'];

    public function customerproducts(){
        return $this->belongsTo(Product::class);
    }
    public function productimage()
    {
        return $this->hasMany(ProductImage::class);
    }
}
