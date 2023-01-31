<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shipping>
 */
class ShippingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'method'=>fake()->word(),
            'price'=>fake()->randomFloat(2, 5, 50),
            'delivery_time'=>fake()->dateTimeBetween('now', '+7 days'),
        ];
    }
}
