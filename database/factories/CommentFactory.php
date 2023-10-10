<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'article_id' => fake()->numberBetween(1, 40),
            'email' => fake()->email(),
            'message' => fake()->text(100),
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime()
        ];
    }
}
