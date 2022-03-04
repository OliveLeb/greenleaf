<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name($gender=null),
            'details' => $this->faker->sentence($nbWords = 5),
            'description' => $this->faker->text($maxNbChars = 200),
            'product_code' => '-00',
            'price' => $this->faker->numberBetween($min = 500, $max = 10000),
            'quantity' => $this->faker->numberBetween($min = 1, $max = 100),
        ];
    }
}
