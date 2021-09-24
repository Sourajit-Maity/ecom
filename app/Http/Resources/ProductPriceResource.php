<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductPriceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
           
            'name' => $this->name,
            'slug' => $this->slug,
            '1-5' => 1-5,
            '6-15' => 6-15,
            '16-25' => 16-25,
            '26-50' => 26-50,
            '51-100' => 51-100,
            '101-199' => 101-199,
            '200-499' => 200-499,
            '500+' => 500,
            'magnet' => $this->magnet,
            'pin' => $this->pin,
            'swivel_clip' => $this->swivel_clip,
            
        ];
    }
}
