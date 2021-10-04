<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingAddress extends Model
{
    use HasFactory;
    protected $with=['user'];
    protected $fillable = [ 
        'user_id', 'first_name', 'last_name',
        'nick_name', 'phone', 'company',
        'street_address', 'city', 'country',
        'state', 'postal_code', 
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
