<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // word artinya satu kata
            // sentence tidak panjang hanya 4
            'name' => fake()->word(),
            'deskripsi' => fake()->sentence(4),
        ];
    }
}
