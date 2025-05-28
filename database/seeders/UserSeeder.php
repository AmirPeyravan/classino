<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        [
            'name' => 'adminUser',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'name' => 'teacherUser',
            'email' => 'teacher@example.com',
            'password' => Hash::make('password'),
            'role' => 'teacher',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'name' => 'studentUser',
            'email' => 'student@example.com',
            'password' => Hash::make('password'),
            'role' => 'student',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);

    }
}
