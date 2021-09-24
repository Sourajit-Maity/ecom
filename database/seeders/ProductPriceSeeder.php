<?php

namespace Database\Seeders;
use App\Models\ProductPrice;
use Illuminate\Database\Seeder;

class ProductPriceSeeder extends Seeder
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
                "name" => "White Plastic Rectangle",
                "slug" => "white_plastic_rectangle",
                "1-5" => "15.37",
                "6-15" => "13.88",
                "16-25" => "12.44",
                "26-50" => "11.09",
                "51-100" => "9.23",
                "101-199" => "8.14",
                "200-499" => "7.75",
                "500+" => "7.07",

            ],

            [
                "name" => "Gold & Silver Plastic Rectangle",
                "slug" => "gold_silver_plastic_rectangle",
                "1-5" => "16.42",
                "6-15" => "14.93",
                "16-25" => "13.49",
                "26-50" => "12.14",
                "51-100" => "10.28",
                "101-199" => "9.19",
                "200-499" => "8.80",
                "500+" => "8.12",

            ],

            [
                "name" => "Metallic Plastic Rectangle",
                "slug" => "metallic_plastic_rectangle",
                "1-5" => "16.95",
                "6-15" => "15.46",
                "16-25" => "14.02",
                "26-50" => "12.66",
                "51-100" => "10.80",
                "101-199" => "9.71",
                "200-499" => "9.32",
                "500+" => "8.64",

            ],
            [
                "name" => "Framed White Badges",
                "slug" => "framed_white_badges",
                "1-5" => "21.39",
                "6-15" => "21.39",
                "16-25" => "21.39",
                "26-50" => "21.39",
                "51-100" => "21.39",
                "101-199" => "21.39",
                "200-499" => "21.39",
                "500+" => "21.39",
            ],

            [
                "name" => "Framed Gold or Silver Badges",
                "slug" => "framed_gold_or_silver_badges",
                "1-5" => "22.49",
                "6-15" => "20.93",
                "16-25" => "19.42",
                "26-50" => "17.99",
                "51-100" => "16.04",
                "101-199" => "14.90",
                "200-499" => "14.49",
                "500+" => "13.77",
            ],

            [
                "name" => "Framed metallic Badges",
                "slug" => "framed_metallic_badges",
                "1-5" => "23.04",
                "6-15" => "21.48",
                "16-25" => "19.97",
                "26-50" => "18.55",
                "51-100" => "16.59",
                "101-199" => "15.45",
                "200-499" => "15.04",
                "500+" => "14.32",
            ],
            [
                "name" => "Oval White Badges",
                "slug" => "oval_white_badges",
                "1-5" => "19.37",
                "6-15" => "17.88",
                "16-25" => "16.44",
                "26-50" => "15.09",
                "51-100" => "13.23",
                "101-199" => "12.14",
                "200-499" => "11.75",
                "500+" => "11.07",
            ],
            [
                "name" => "Framed Oval White Badges",
                "slug" => "framed_oval_white_badges",
                "1-5" => "25.37",
                "6-15" => "23.88",
                "16-25" => "22.44",
                "26-50" => "21.09",
                "51-100" => "19.23",
                "101-199" => "18.14",
                "200-499" => "17.75",
                "500+" => "17.07",
            ],

            [
                "name" => "Framed Metallic Oval Badges",
                "slug" => "framed_metallic_oval_badges",
                "1-5" => "26.37",
                "6-15" => "24.88",
                "16-25" => "23.44",
                "26-50" => "22.09",
                "51-100" => "20.23",
                "101-199" => "19.14",
                "200-499" => "18.75",
                "500+" => "18.07",
            ],
            [
                "name" => "Fasteners",
                "slug" => "fasteners",
                "magnet" => "2.00",
                "pin" => "0.00",
                "swivel_clip" => "0.00",

            ],


        ];
        foreach($datas as $data){
            ProductPrice::create($data);
        }
    }
}
