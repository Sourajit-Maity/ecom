<?php

namespace Database\Seeders;
use App\Models\ProductionTime;
use Illuminate\Database\Seeder;

class ProductionTimeSeeder extends Seeder
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
                "production_time_name" => "Standard",
                "price" => "0",
                "days" => 5-7,
            ],
            [
                "production_time_name" => "Recommended",
                "price" => "15.00",
                "days" => 2-3,
            ],
            [
                "production_time_name" => "Fast",
                "price" => "25.00",
                "days" => 1-2,
            ],
           
        ];
        foreach($datas as $data){
            ProductionTime::create($data);
        }
    }
}
