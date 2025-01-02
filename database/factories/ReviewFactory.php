<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id' => $this->faker->uuid,
            'review' => $this->faker->sentence(10),
            'rating' => $this->faker->numberBetween(1, 5),
            'user_id' => $this->faker->uuid,
            'movie_id' => $this->faker->uuid,
            'created_at' => now(),
        ];
    }
}
