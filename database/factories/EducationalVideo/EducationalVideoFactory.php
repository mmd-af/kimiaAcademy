<?php

namespace Database\Factories\EducationalVideo;

use Illuminate\Database\Eloquent\Factories\Factory;

class EducationalVideoFactory extends Factory
{

    public function definition()
    {
        return [
            'title' => $this->faker->realTextBetween(5, 15),
            'youtube_link' => $this->faker->realTextBetween(10, 15),
            'aparat_link' => $this->faker->realTextBetween(10, 15),
            'is_active' => 1,
        ];
    }

}
