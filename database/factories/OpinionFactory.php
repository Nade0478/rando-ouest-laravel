<?php

namespace Database\Factories;

use App\Models\Place_rando;
use Illuminate\Foundation\Auth\User;
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
            'user_id' => User::factory(),
            'place_rando_id' => Place_rando::factory(),
            'title_opinion' => $this->faker->sentence(3),
            'content_opinion' => $this->faker->paragraph(3),
            'note_opinion' => $this->faker->numberBetween(1, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
