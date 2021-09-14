<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutpage extends Model
{
    use HasFactory;
    protected $fillable = [
        'cms_id',
        'banner_image',
        'content_heading',
        'content_sub_heading',
        'content_text',
        'content_image1',
        'content_image2',
    ];

    public function cms(){
        return $this->belongsTo(Pages::class);
    }
}
