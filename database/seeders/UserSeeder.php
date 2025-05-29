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
            'name' => 'studentUser1',
            'email' => 'student1@example.com',
            'password' => Hash::make('password'),
            'role' => 'student',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'name' => 'studentUser2',
            'email' => 'student2@example.com',
            'password' => Hash::make('password'),
            'role' => 'student',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'name' => 'studentUser3',
            'email' => 'student3@example.com',
            'password' => Hash::make('password'),
            'role' => 'student',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'name' => 'studentUser4',
            'email' => 'student4@example.com',
            'password' => Hash::make('password'),
            'role' => 'student',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'name' => 'studentUser5',
            'email' => 'student5@example.com',
            'password' => Hash::make('password'),
            'role' => 'student',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'name' => 'teacherUser6',
            'email' => 'teacher6@example.com',
            'password' => Hash::make('password'),
            'role' => 'teacher',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'name' => 'teacherUser7',
            'email' => 'teacher7@example.com',
            'password' => Hash::make('password'),
            'role' => 'teacher',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'name' => 'teacherUser8',
            'email' => 'teacher8@example.com',
            'password' => Hash::make('password'),
            'role' => 'teacher',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'name' => 'adminUser',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);

    }
}
