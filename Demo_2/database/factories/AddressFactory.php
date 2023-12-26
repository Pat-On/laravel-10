<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //

            'address' => fake()->address(),
            // 'description' => fake()->paragraph(),
            // 'image' => fake()->imageUrl(),
            'user_id' => rand(1,4),
        ];
    }
}
