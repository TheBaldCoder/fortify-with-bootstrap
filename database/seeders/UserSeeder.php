<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@user.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@user.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'user3',
            'email' => 'user3@user.com',
            'password' => Hash::make('password'),
        ]);
    }
}
