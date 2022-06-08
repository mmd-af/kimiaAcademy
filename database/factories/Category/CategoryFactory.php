<?php

namespace Database\Factories\Category;

use Faker\Core\Number;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realTextBetween(5, 15),
            'slug' => $this->faker->realTextBetween(5, 15),
            'parent_id' => 0,
            'type' => rand(1, 3),
        ];
    }

}
