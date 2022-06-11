<?php

namespace Database\Factories\Post;

use App\Models\Post\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

    public function definition()
    {
        $title = $this->faker->realTextBetween(5, 15);
        return [
            'user_id' => 1,
            'title' => $title,
            'slug' => SlugService::createSlug(Post::class, 'slug', $title),
            'description' => $this->faker->realTextBetween(500, 1000),
            'is_active' => 1,
        ];
    }

}
