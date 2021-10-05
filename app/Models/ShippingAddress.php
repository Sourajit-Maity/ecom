<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    use HasFactory;
    protected $with=['user'];
    protected $fillable = [ 
        'user_id', 'shipping_first_name', 'shipping_last_name',
         'shipping_phone', 'shipping_company',
        'shipping_street_address', 'shipping_city', 'shipping_country',
        'shipping_state', 'shipping_postal_code', 
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
