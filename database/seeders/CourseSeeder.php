<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
    {
        $courses = [
            [
                'title' => 'آموزش مقدماتی PHP',
                'category_id' => 1,
                'teacher_id' => 6,
                'price' => 250000,
                'duration' => 12,
                'status' => 'published',
            ],
            [
                'title' => 'دوره طراحی لوگو حرفه‌ای',
                'category_id' => 2,
                'teacher_id' => 7,
                'price' => 180000,
                'duration' => 8,
                'status' => 'published',
            ],
            [
                'title' => 'یادگیری زبان انگلیسی از پایه',
                'category_id' => 3,
                'teacher_id' => 8,
                'price' => 300000,
                'duration' => 15,
                'status' => 'published',
            ],
            [
                'title' => 'آموزش بازاریابی در اینستاگرام',
                'category_id' => 4,
                'teacher_id' => 7,
                'price' => 220000,
                'duration' => 9,
                'status' => 'draft',
            ],
            [
                'title' => 'تحلیل داده با پایتون',
                'category_id' => 5,
                'teacher_id' => 6,
                'price' => 350000,
                'duration' => 10,
                'status' => 'published',
            ],
            [
                'title' => 'تقویت مهارت‌های ارتباطی',
                'category_id' => 6,
                'teacher_id' => 7,
                'price' => 200000,
                'duration' => 6,
                'status' => 'published',
            ],
            [
                'title' => 'آشنایی با مفاهیم مالی و حسابداری',
                'category_id' => 7,
                'teacher_id' => 8,
                'price' => 275000,
                'duration' => 11,
                'status' => 'published',
            ],
            [
                'title' => 'آموزش نقاشی با مداد رنگی',
                'category_id' => 9,
                'teacher_id' => 6,
                'price' => 150000,
                'duration' => 7,
                'status' => 'draft',
            ],
        ];

        foreach ($courses as $course) {
            DB::table('courses')->insert([
                'title' => $course['title'],
                'slug' => Str::slug($course['title'], '-'),
                'description' => 'توضیحاتی درباره «' . $course['title'] . '»',
                'category_id' => $course['category_id'],
                'teacher_id' => $course['teacher_id'],
                'price' => $course['price'],
                'duration' => $course['duration'],
                'status' => $course['status'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
