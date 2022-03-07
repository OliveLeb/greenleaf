<?php

namespace Database\Seeders;

use App\Models\Picture;
use App\Models\Product;
use App\Models\Category;
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
        ->create()
        ->each(function($product, $i) {
            $category = Category::inRandomOrder()->first();

            $product->pictures()->create([
                'title' => $product->name,
                'link' => 'default/no_image.png'
            ]);

            $product->product_code = $category->category_code . '-00' . $i++;

            $product->categories()->attach($category);

            $product->save();
        });
    }
}
