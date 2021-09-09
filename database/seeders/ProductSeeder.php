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
        $productNames=['product1','product2', 'product3','product4','product5', 'product6','product7','product8', 'product9',];
        $productSlugs=['product1','product2', 'product3','product4','product5', 'product6','product7','product8', 'product9',];

        $productCategories=['product1','product2', 'product3','product4','product5', 'product6','product7','product8', 'product9',];
        foreach ($productNames as $key => $productName) {
            Product::create(['product_name' => $productName,
            'product_slug' => $productSlugs,
            'product_category' => $productCategories,
            'name' => $productName,
            
            ]);
        }
    }
}
