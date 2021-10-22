<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory; 
    protected $fillable = [
        'amount',
        'user_id', 
        'full_name',
        'email',
        'method',
        'status',
        'returned_status',
        'currency', 
        'total_response',
        'order_id',
        'user_id',
    ];
}
