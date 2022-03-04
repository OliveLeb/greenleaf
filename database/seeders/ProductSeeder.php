<?php

namespace Database\Seeders;

use App\Models\Picture;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<=12; $i++) {
            Product::create([
                'name' => 'Plante '.$i,
                'slug' => 'plante-'.$i,
                'details' => 'plante '.$i,
                'description' => 'Lorem' .$i. ' ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'product_code' => '00'.$i,
                'price' => rand(500, 15000),
                'quantity' => rand(1, 100),
            ])
            ->each(function($product) {
                $product->pictures()->create([
                    'title' => $product->name,
                    'link' => 'default/no_image.jpg'
                ]);
            });
        }
    }
}
