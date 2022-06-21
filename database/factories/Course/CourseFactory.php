<?php

namespace Database\Factories\Course;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CourseFactory extends Factory
{
    public function definition()
    {
//        $title = $this->faker->realTextBetween(5, 45);
        $title = $this->faker->sentence;
        $slug = Str::slug($title);
//        $user = User::count() >= 20 ? User::inRandomOrder()->first()->id: User::factory();
//        $category = Category::count() >= 7 ? Category::inRandomOrder()->first()->id: Category::factory();

        return [
            'title' => $title,
            'slug' =>  $slug,
            'description' => $this->faker->realTextBetween(300, 700),
            'actual_price' => rand(50000, 400000),
            'discount_price' => rand(10000, 50000),
            'view_count' => rand(1000, 5000),
            'subscriber_count' => rand(1000, 5000),
            'course_lang' => $this->faker->realTextBetween(5, 25),
            'course_time' => $this->faker->realTextBetween(5, 25),
            'course_size' => $this->faker->realTextBetween(5, 25),
            'course_kind' => $this->faker->realTextBetween(5, 25),
            'is_active' => rand(0, 1),
        ];
    }

}
