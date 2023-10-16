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
    public function definition(): array
    {
        return [
            //
            'name' => fake()->unique()->sentence(2),
            'deskripsi' => fake()->text,
            'price' => fake()->numberBetween(10000, 100000), // This generates a random decimal with two decimal places between 1.00 and 1000.00
            'image_url' => fake()->imageUrl($width = 200, $hight = 200),

        ];
    }
}