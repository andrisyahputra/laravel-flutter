<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $table->id();
        // $table->bigInteger('user_id')->unsigned();
        // $table->bigInteger('seller_id')->unsigned();
        // $table->string('number', 16);
        // $table->decimal('total_price', 10, 2);
        // $table->enum('payment_status', ['1', '2', '3']);
        // $table->string('payment_url')->nullable();
        // $table->text('delivery_address')->nullable();
        // $table->timestamps();
        return [
            'number' => fake()->randomNumber(8),
            'total_price' => fake()->numberBetween(150000, 500000),
            'payment_status' => '1',
            'user_id' => '1',
            'seller_id' => '2',
        ];
    }
}
