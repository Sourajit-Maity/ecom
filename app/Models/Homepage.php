<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;
    protected $fillable = [
        'cms_id',
        'banner_heading',
        'banner_sub_heading',
        'banner_content',
        'banner_image',
        'content1_heading',
        'content1_text',
        'content1_image',
        'content1_subheading',
        'content2_heading',
        'content2_text',
        'content2_image',
        'content2_option_heading1',
        'content2_option_text1',
        'content2_option_image1',
        'content2_option_heading2',
        'content2_option_text2',
        'content2_option_image2',
        'content2_option_heading3',
        'content2_option_text3',
        'content2_option_image3',
    ];

    public function cms(){
        return $this->belongsTo(Pages::class);
    }
}
