<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id' => $this->faker->uuid,
            'title' => $this->faker->sentence(3),
            'synopsis' => $this->faker->paragraph,
            'poster' => $this->faker->imageUrl(),
            'year' => $this->faker->year,
            'available' => $this->faker->boolean,
            'genre_id' => $this->faker->uuid,
            'created_at' => now(),
        ];
    }
}
