<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('genres')->insert([
            ['id' => fake()->uuid, 'name' => 'Action', 'created_at' => now()],
            ['id' => fake()->uuid, 'name' => 'Comedy', 'created_at' => now()],
            ['id' => fake()->uuid, 'name' => 'Drama', 'created_at' => now()],
            ['id' => fake()->uuid, 'name' => 'Horror', 'created_at' => now()],
            ['id' => fake()->uuid, 'name' => 'Sci-Fi', 'created_at' => now()],
        ]);
    }
}
