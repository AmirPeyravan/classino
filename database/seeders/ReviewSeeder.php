<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
    {
        $reviews = [
            [
                'user_id' => 1,
                'course_id' => 1,
                'rating' => 5,
                'comment' => 'دوره فوق‌العاده‌ای بود، خیلی مفید و کاربردی.',
            ],
            [
                'user_id' => 2,
                'course_id' => 2,
                'rating' => 4,
                'comment' => 'مطالب خوب بودن ولی بعضی بخش‌ها می‌تونست بهتر توضیح داده بشه.',
            ],
            [
                'user_id' => 3,
                'course_id' => 3,
                'rating' => 3,
                'comment' => 'دوره متوسط بود، انتظار بیشتری داشتم.',
            ],
            [
                'user_id' => 4,
                'course_id' => 4,
                'rating' => 5,
                'comment' => 'مدرس خیلی خوب توضیح داده بود، ممنون!',
            ],
            [
                'user_id' => 5,
                'course_id' => 5,
                'rating' => 2,
                'comment' => 'مطالب ناقص بود و پشتیبانی ضعیف.',
            ],
        ];

        foreach ($reviews as $review) {
            DB::table('reviews')->insert([
                'user_id' => $review['user_id'],
                'course_id' => $review['course_id'],
                'rating' => $review['rating'],
                'comment' => $review['comment'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
