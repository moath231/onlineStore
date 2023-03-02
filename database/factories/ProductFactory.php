<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
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
            'name'=>fake()->name(),
            'slug'=>fake()->slug(),
            'shortDescription'=>fake()->sentence(),
            'longDescription'=>fake()->sentence(),
            'price'=>fake()->randomNumber(2),
            'stock'=>fake()->randomNumber(2),
            'model'=>fake()->randomNumber(2),
            'color'=>fake()->colorName(),
            'size'=>fake()->randomNumber(1),
            'mainImage'=>fake()->image(),
            'image1'=>fake()->image(),
            'image2'=>fake()->image(),
            'image3'=>fake()->image(),
            'is_delete'=>fake()->boolean(),
            'category_id'=>Category::factory(),
            'brand_id'=>Brand::factory()
        ];
    }
}
