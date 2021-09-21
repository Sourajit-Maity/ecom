<?php

namespace Database\Seeders;
use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
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
                "user_id" => "24",
                "review_description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived",
                "active" => 1,
            ],
            [
                "user_id" => "5",
                "review_description" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters",
                "active" => 1,
            ],
            [
                "user_id" => "12",
                "review_description" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor ",
                "active" => 1,
            ],
           
        ];
        foreach($datas as $data){
            Review::create($data);
        }
    }
}
