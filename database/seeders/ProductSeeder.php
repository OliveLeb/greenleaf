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
            Product::factory()
                ->count(20)
                ->create()->each(function($product){
                    $product->pictures()->create([
                        'title' => $product->name,
                        'link' => 'default/no_image.png'
                    ]);
                    $product->save();
                });
    }
}
