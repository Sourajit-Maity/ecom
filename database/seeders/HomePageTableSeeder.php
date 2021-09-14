<?php

namespace Database\Seeders;
use App\Models\Pages;
use App\Models\Homepage;
use Illuminate\Database\Seeder;

class HomePageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cms = Pages::whereSlug('home_page')->first();
        $datas = [
            "pages_id" => $cms->id,
            "banner_heading" => "Lorem Ipsum Dolor Amet Custom Badges",
            "banner_sub_heading" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Phasellus ut leo, tortor vehicula ante lectus. Diam integer
            nulla lectus cursus ultrices in.",
            "banner_content" => "FRIENDLY PRICES!",
            "banner_image" => "welcome_assets/images/banner-image2.png",

            "content1_heading" => "Who We Are",
            "content1_subheading" => "BADGES ARE OUR PASSION",
			"content1_text" => "Badges may be small, but they are big to us. With their years of experience, our entire team treats each and every badge we make as if it were our own. We take the utmost pridein making the best quality badges at a great price. Badges. Your Brand. Our Passion.",
			
			 "content2_heading" => "Company Benefits",
            "content2_text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant massa imperdiet purus amet, at nullam arcu
            dignissim netus. Purus in in in dignissim cum fermentum est. Mattis vehicula morbi odio viverra.",
			"content2_image" => "welcome_assets/images/company-benefits.png",

			 "content2_option_heading1" => "Setup Charges",
            "content2_option_text1" => "Lorem Ipsum is simply dummy text of the
            printing and typesetting industry.",
			"content2_option_image1" => "welcome_assets/images/benefits-icon01.svg",
			
			
			 "content2_option_heading2" => "Minimums",
            "content2_option_text2" => "Lorem Ipsum is simply dummy text of the
            printing and typesetting industry.",
			"content2_option_image2" => "welcome_assets/images/benefits-icon02.svg",

            "content2_option_heading3" => "Shipping",
            "content2_option_text3" => "Lorem Ipsum is simply dummy text of the
            printing and typesetting industry.",
			"content2_option_image3" => "welcome_assets/images/benefits-icon03.svg",
			


        ];
        HomePage::create($datas);
    }
}
