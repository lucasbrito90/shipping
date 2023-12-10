<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'identifier' => $this->faker->numberBetween(1, 1000),
            'description' => $this->faker->text,
            'start_date' => $this->faker->date(),
            'request_date' => $this->faker->date(),
            'price' => $this->faker->randomFloat(2, 0, 100000),
            'payment_date' => $this->faker->date(),
            'budget' => $this->faker->randomFloat(2, 0, 100000),
            'end_date' => $this->faker->date(),
            'cost' => $this->faker->randomFloat(2, 0, 100000),
            'profit' => $this->faker->randomFloat(2, 0, 100000),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
