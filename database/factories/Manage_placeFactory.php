<?php

namespace Database\Factories;

use App\Models\Place_rando;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manage_place>
 */
class Manage_placeFactory extends Factory
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
        ];
    }
}
