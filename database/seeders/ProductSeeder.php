<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                "product_name" => "White Plastic Rectangle",
                "product_slug" => "white_plastic",
                "product_category" => "DigBadge",
            ],
            [
                "product_name" => "Gold & Silver Plastic Rectangle",
                "product_slug" => "gold_silver_plastic",
                "product_category" => "SMSBadge",
            ],
            [
                "product_name" => "Metallic Plastic Rectangle",
                "product_slug" => "metalic_plastic",
                "product_category" => "BRSBadge",
            ],
            [
                "product_name" => "Framed White Badges",
                "product_slug" => "framed_white",
                "product_category" => "FRBadge",
            ],
            [
                "product_name" => "Framed Gold or Silver Badges",
                "product_slug" => "framed_gold_silver",
                "product_category" => "FRGBadge",
            ],
            [
                "product_name" => "Framed metallic Badges",
                "product_slug" => "framed_metallic",
                "product_category" => "FRBRSBadge",
            ],

            [
                "product_name" => "Oval White Badges",
                "product_slug" => "oval_white",
                "product_category" => "OvBadge",
            ],
            [
                "product_name" => "Framed Oval White Badges",
                "product_slug" => "framed_oval_white",
                "product_category" => "FrOvBadge",
            ],
            [
                "product_name" => "Framed Metallic Oval Badges",
                "product_slug" => "framed_metallic_oval",
                "product_category" => "FrOvBRSBadge",
            ],
        ];
        foreach($datas as $data){
            Product::create($data);
        }
    }
}
