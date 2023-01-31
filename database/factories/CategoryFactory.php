<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{

    public function definition()
    {
        return [
            'name'=>fake()->name(),
            'description'=>fake()->sentence(),
            'logo'=>fake()->image()
        ];
    }
}
