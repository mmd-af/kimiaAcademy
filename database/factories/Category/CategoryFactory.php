<?php

namespace Database\Factories\Category;

use App\Models\Category\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{

    public function definition()
    {
        $title = $this->faker->realTextBetween(5, 15);
        return [
            'title' => $title,
            'slug' => SlugService::createSlug(Category::class, 'slug', $title),
            'parent_id' => 0,
            'type' => rand(1, 3),
        ];
    }

}
