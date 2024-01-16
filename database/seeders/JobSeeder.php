<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jobs')->insert([
            'name' => 'Cook',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'name' => 'Teacher',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'name' => 'Lawyer',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('jobs')->insert([
            'name' => 'Astronaut',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
