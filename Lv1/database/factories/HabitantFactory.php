<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'cin' =>$this->faker->numerify(),
            'nom' =>$this->faker->firstName(), 
            'email' =>$this->faker->email(), 
            'ville_id' =>\App\Models\Ville::factory(), 
            'photo' =>$this->faker->imageUrl(), 
        ];
    }
}
