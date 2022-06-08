<?php

namespace Database\Factories\Post;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

    public function definition()
    {
        return [
            'user_id' => 1,
            'title' => $this->faker->realTextBetween(5, 15),
            'slug' => $this->faker->realTextBetween(5, 15),
            'description' => $this->faker->realTextBetween(500, 1000),
            'is_active' => 1,
        ];
    }

}
