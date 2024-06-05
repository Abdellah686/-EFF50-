<?php

namespace Database\Factories;

use App\Models\Ville;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Habitant>
 */
class HabitantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cin' => $this->faker->numerify('#########'), // Example format for CIN
            'nom' => $this->faker->firstName(),
            'email' => $this->faker->unique()->safeEmail(),
            'ville_id' => Ville::factory()->create()->id, // Create a Ville and use its ID
            'password' => Hash::make('password'), // Default password
            'photo' => $this->faker->imageUrl(), // Generate a placeholder image URL
        ];
    }
}
