<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
            ['id' => fake()->uuid, 'name' => 'Admin', 'created_at' => now()],
            ['id' => fake()->uuid, 'name' => 'User', 'created_at' => now()],
        ]);
    }
}
