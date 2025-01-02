<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CastSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('casts')->insert([
            ['id' => fake()->uuid, 'name' => 'Robert Downey Jr.', 'age' => 58, 'biodata' => 'Pemeran Iron Man', 'avatar' => fake()->imageUrl(), 'created_at' => now()],
            ['id' => fake()->uuid, 'name' => 'Chris Evans', 'age' => 42, 'biodata' => 'Pemeran Captain America', 'avatar' => fake()->imageUrl(), 'created_at' => now()],
            ['id' => fake()->uuid, 'name' => 'Scarlett Johansson', 'age' => 39, 'biodata' => 'Pemeran Black Widow', 'avatar' => fake()->imageUrl(), 'created_at' => now()],
            ['id' => fake()->uuid, 'name' => 'Mark Ruffalo', 'age' => 56, 'biodata' => 'Pemeran Hulk', 'avatar' => fake()->imageUrl(), 'created_at' => now()],
            ['id' => fake()->uuid, 'name' => 'Chris Hemsworth', 'age' => 40, 'biodata' => 'Pemeran Thor', 'avatar' => fake()->imageUrl(), 'created_at' => now()],
            ['id' => fake()->uuid, 'name' => 'Tom Holland', 'age' => 28, 'biodata' => 'Pemeran Spider-Man', 'avatar' => fake()->imageUrl(), 'created_at' => now()],
            ['id' => fake()->uuid, 'name' => 'Benedict Cumberbatch', 'age' => 47, 'biodata' => 'Pemeran Doctor Strange', 'avatar' => fake()->imageUrl(), 'created_at' => now()],
            ['id' => fake()->uuid, 'name' => 'Chadwick Boseman', 'age' => 43, 'biodata' => 'Pemeran Black Panther', 'avatar' => fake()->imageUrl(), 'created_at' => now()],
            ['id' => fake()->uuid, 'name' => 'Paul Rudd', 'age' => 54, 'biodata' => 'Pemeran Ant-Man', 'avatar' => fake()->imageUrl(), 'created_at' => now()],
            ['id' => fake()->uuid, 'name' => 'Brie Larson', 'age' => 35, 'biodata' => 'Pemeran Captain Marvel', 'avatar' => fake()->imageUrl(), 'created_at' => now()],
        ]);
    }
}
