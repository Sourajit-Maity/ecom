<?php

namespace Database\Seeders;
use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
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
                "country_id" => "1",
                "state_name" => "West Bengal",
                "active" => 1,
            ],
            [ 
                "country_id" => "1",
                "state_name" => "Delhi",
                "active" => 1,
            ],
            [
                "country_id" => "2",
                "state_name" => "Texas",
                "active" => 1,
            ],
            [
                "country_id" => "2",
                "state_name" => "Florida",
                "active" => 1,
            ],
            [
                "country_id" => "2",
                "state_name" => "Alaska",
                "active" => 1,
            ],
           
        ];
        foreach($datas as $data){
            State::create($data);
        }
    }
}
