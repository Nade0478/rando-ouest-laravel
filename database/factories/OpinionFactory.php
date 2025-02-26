<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Place_rando;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Opinion>
 */
class OpinionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'users_id' => User::factory(),
            'place_randos_id' => Place_rando::factory(),
            'title_opinion' => $this->faker->sentence(3),
            'content_opinion' => $this->faker->paragraph(3),
            'note_opinion' => $this->faker->numberBetween(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
