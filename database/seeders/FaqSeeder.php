<?php

namespace Database\Seeders;
use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
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
                "question" => "What is your return policy?",
                "answer" => "Personalized items are not able to be returned. If your badge is defective, contact us and we will replace it",

            ],
            [
                "question" => "How long will shipping take and what is the price?",
                "answer" => "Personalized items are not able to be returned. If your badge is defective, contact us and we will replace it.",

            ],
            [
                "question" => "What is your turnaround time?",
                "answer" => "Personalized items are not able to be returned. If your badge is defective, contact us and we will replace it.",
            ],
            [
                "question" => "What material are the name badges made out of?",
                "answer" => "Personalized items are not able to be returned. If your badge is defective, contact us and we will replace it",
            ],          
        ];
        foreach($datas as $data){
            Faq::create($data);
        }
    }
}
