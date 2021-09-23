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
           
            'product_type' => $this->product_type,
            'product_category' => $this->product_category,
            'price' => $this->price,
            'price_range' => $this->price_range
            
        ];
    }
}
