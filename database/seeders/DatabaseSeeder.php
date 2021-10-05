<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserRoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductPriceSeeder::class);
        $this->call(PagesSeeder::class);
        $this->call(HomePageTableSeeder::class);
        $this->call(AboutPageTableSeeder::class);
        $this->call(FaqPageTableSeeder::class);
        $this->call(ContactPageTableSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(ProductionTimeSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
