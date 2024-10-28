<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(),
            'content' => $this->faker->realText(3000),
            'image' => $this->faker->imageUrl(),
            'likes' => $this->faker->randomNumber(),
            'is_published' => 1,
            'category_id' => Category::all()->random()->id,
        ];
    }
}
