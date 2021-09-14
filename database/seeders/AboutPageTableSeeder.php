<?php

namespace Database\Seeders;
use App\Models\Pages;
use App\Models\Aboutpage;
use Illuminate\Database\Seeder;

class AboutPageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cms = Pages::whereSlug('about_page')->first();
        $datas = [
            "pages_id" => $cms->id,

            "banner_image" => "welcome_assets/images/about-banner-2.png",

            "content_heading" => "Badges Ar e Our Passion",
            "content_sub_heading" => "BADGES ARE OUR PASSION",
			"content_text" => "Badges may be small, but they are big to us. With their years of
            experience, our entire team treats each and every badge we make as
            if it were our own. We take the utmost pride in making the best
            quality badges at a great price. Badges. Your Brand. Our Passion.",
			
			
			"content_image1" => "welcome_assets/images/passion-image2.png",

			"content_image2" => "welcome_assets/images/passion-image.png",
			

        ];
        Aboutpage::create($datas);
    }
}
