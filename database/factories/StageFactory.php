<?php

namespace Database\Factories;

use App\Models\Enums\StageOptions;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stage>
 */
class StageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => StageOptions::Passivation->value,
            'is_done' => $this->faker->boolean,
            'when' => $this->faker->dateTime,
        ];
    }
}
