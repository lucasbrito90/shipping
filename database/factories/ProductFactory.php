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
            'name' => fake()->name(),
            'description' => fake()->text(),
            'price' => fake()->randomFloat(2, 0, 1000),
            'is_done' => fake()->boolean(),
            'is_ready' => fake()->boolean(),
            'is_shipped' => fake()->boolean(),
            'type' => fake()->numberBetween(1, 3),
            'identifier' => fake()->numberBetween(1, 1000),
        ];
    }
}
