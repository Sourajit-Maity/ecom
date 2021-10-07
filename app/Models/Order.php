<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function getStatusAttribute($value)
    {
        $status = '';
        if($value == 1){
            $status = 'Processing';
        }
        if($value == 2){
            $status = 'Accepted';
        }
        if($value == 3){
            $status = 'Cancel';
        }
        if($value == 4){
            $status = 'Delivered';
        }
        return $status;
    }
    
    protected $fillable = [ 
        'user_id','title', 'production_time_id', 'product_image',
        'payment_method','shipping_method','names',
        'quantity','payment_price','status'
    ];
    public function orderdetails(){
        return $this->hasMany(OrderDetails::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function product(){
        return $this->hasOne(Product::class,'id','product_id');
    }
   
}

