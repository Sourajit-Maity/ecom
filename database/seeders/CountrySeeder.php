<?php

namespace Database\Seeders;
use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
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
                "country_name" => "India",
                "active" => 1,
            ],
            [
                "country_name" => "USA",
                "active" => 1,
            ],
            
           
        ];
        foreach($datas as $data){
            Country::create($data);
        }
    }
}
