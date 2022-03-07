<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            [ 'name' => 'Fruitiers', 'slug' => 'fruitiers', 'category_code' => 'F' ],
            [ 'name' => 'Plantes d\'intérieurs', 'slug' => 'plantes-d-interieurs', 'category_code' => 'PI' ],
            [ 'name' => 'Plantes Aromatiques', 'slug' => 'plantes-aromatiques', 'category_code' => 'PA' ],
            [ 'name' => 'Graines', 'slug' => 'graines', 'category_code' => 'G' ],
            [ 'name' => 'Arbres & arbustes', 'slug' => 'arbres-et-arbustes', 'category_code' => 'AA' ],
        ];

        foreach ($categories as $category) {
            Category::create($category)
            ->picture()->create([
                'title' => $category['name'],
                'link' => 'default/no_image.png'
            ])->save();
        }
    }
}
