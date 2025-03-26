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
            "name" => fake()->colorName(),
            "description" => fake()->realText(),
            "quantity" => fake()->numberBetween(1, 10),
            "price" => fake()->numberBetween(10, 100),
        ];
    }
}
