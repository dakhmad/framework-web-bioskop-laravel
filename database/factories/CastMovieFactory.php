<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CastMovieFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id' => $this->faker->uuid,
            'movie_id' => $this->faker->uuid,
            'cast_id' => $this->faker->uuid,
            'created_at' => now(),
        ];
    }
}
