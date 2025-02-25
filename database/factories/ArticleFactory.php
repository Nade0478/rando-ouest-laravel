<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Opinion;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title_article' => $this->faker->sentence,
            'date_article' => $this->faker->date('Y-m-d'),
            'content_article' => $this->faker->paragraph,
            'image_article' => $this->faker->image('public/storage/articles', 640, 480, null, false),
            'opinions_id' => Opinion::factory(),
            'users_id' => User::factory(),
            'category_id' => Category::factory(),
        ];
    }
}
