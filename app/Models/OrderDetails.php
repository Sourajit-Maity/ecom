<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $casts = [
        'design' => 'array'
    ];
    protected $fillable = [ 
        'orders_id', 'quantity','price','name'
    ];
    public function order(){
        return $this->belongsTo(Order::class);
    }
}
