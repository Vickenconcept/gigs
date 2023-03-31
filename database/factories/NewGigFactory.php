<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\newGig>
 */
class NewGigFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company' => fake()->text(10),
            'role' => fake()->text(10),
            'country' => fake()->text(10),
            'state_region' => fake()->text(10),
            'Address' => fake()->numberBetween(),
            'tags' => fake()->numberBetween(),
            'minimum' => fake()->numberBetween(),
            'maximum' => fake()->numberBetween(),
        ];
    }
}
