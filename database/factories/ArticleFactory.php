<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->text(30),
            'content' => fake()->text(600),
            'published' => fake()->boolean(),
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime()
        ];
    }
}
