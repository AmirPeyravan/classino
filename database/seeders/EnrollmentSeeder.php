<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
 public function run(): void
    {
        $enrollments = [
            ['user_id' => 1, 'course_id' => 1],
            ['user_id' => 1, 'course_id' => 2],
            ['user_id' => 2, 'course_id' => 1],
            ['user_id' => 2, 'course_id' => 3],
            ['user_id' => 3, 'course_id' => 4],
            ['user_id' => 3, 'course_id' => 5],
            ['user_id' => 4, 'course_id' => 6],
            ['user_id' => 4, 'course_id' => 7],
            ['user_id' => 5, 'course_id' => 8],
            ['user_id' => 5, 'course_id' => 2],
        ];

        foreach ($enrollments as $enrollment) {
            DB::table('enrollments')->insert([
                'user_id' => $enrollment['user_id'],
                'course_id' => $enrollment['course_id'],
                'enrolled_at' => now(),
            ]);
        }
    }
}
