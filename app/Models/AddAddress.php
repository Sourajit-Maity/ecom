<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddAddress extends Model
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
    public function countryaddress(){
        return $this->belongsTo(Country::class, 'country');
    }
    public function stateaddress(){
        return $this->belongsTo(State::class, 'state');
    }


}
