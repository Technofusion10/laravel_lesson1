<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->firstName(),
            'age' => fake()->numberBetween($min = 12, $max = 22),
            'gender' => fake()->randomElement(['Female','Male']),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
