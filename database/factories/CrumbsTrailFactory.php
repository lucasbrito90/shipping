<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CrumbsTrail>
 */
class CrumbsTrailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'who' => fake()->name(),
            'where' => fake()->randomElement(['fitter', 'welder', 'wrapper', 'shipper', 'packer', 'loader', 'driver']),
            'when' => fake()->dateTimeBetween('-1 year', 'now'),
            'why' => fake()->text(),
            'status' => fake()->randomElement(['pending', 'in progress', 'completed']),
            'description' => fake()->text(),
        ];
    }
}
