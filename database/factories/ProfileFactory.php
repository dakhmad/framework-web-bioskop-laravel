<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id' => $this->faker->uuid,
            'biodata' => $this->faker->text(200),
            'age' => $this->faker->numberBetween(18, 60),
            'address' => $this->faker->address,
            'avatar' => $this->faker->imageUrl(),
            'user_id' => $this->faker->uuid,
            'created_at' => now(),
        ];
    }
}
