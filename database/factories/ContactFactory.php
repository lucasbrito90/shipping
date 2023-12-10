<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
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
            'telephone' => fake()->phoneNumber(),
            'social_media' => fake()->url(),
            'cellphone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'fax' => fake()->phoneNumber(),
            'website' => fake()->url(),
            'position' => fake()->jobTitle(),
            'department' => fake()->jobTitle(),
            'languages' => fake()->languageCode()
        ];
    }
}
