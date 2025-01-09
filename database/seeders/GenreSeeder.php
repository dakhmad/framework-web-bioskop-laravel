<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        $genres = [
            ['name' => 'Action', 'created_at' => now()],
            ['name' => 'Comedy', 'created_at' => now()],
            ['name' => 'Drama', 'created_at' => now()],
            ['name' => 'Horror', 'created_at' => now()],
            ['name' => 'Sci-Fi', 'created_at' => now()],
        ];

        DB::table('genres')->insert($genres);
    }
}
