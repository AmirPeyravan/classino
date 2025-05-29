<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
    {
        $lessons = [
            [
                'course_id' => 1,
                'title' => 'مقدمه‌ای بر PHP',
                'video_url' => 'https://example.com/videos/php-intro.mp4',
                'content' => 'در این درس با مفاهیم اولیه زبان PHP آشنا می‌شوید.',
                'order_number' => 1,
            ],
            [
                'course_id' => 1,
                'title' => 'نصب و راه‌اندازی XAMPP',
                'video_url' => 'https://example.com/videos/xampp-setup.mp4',
                'content' => 'نحوه نصب XAMPP و اجرای فایل‌های PHP.',
                'order_number' => 2,
            ],
            [
                'course_id' => 2,
                'title' => 'اصول طراحی لوگو',
                'video_url' => 'https://example.com/videos/logo-basics.mp4',
                'content' => 'مفاهیم اولیه و اصول طراحی لوگو.',
                'order_number' => 1,
            ],
            [
                'course_id' => 2,
                'title' => 'استفاده از نرم‌افزار Illustrator',
                'video_url' => 'https://example.com/videos/illustrator-logo.mp4',
                'content' => 'آموزش طراحی لوگو در ایلاستریتور.',
                'order_number' => 2,
            ],
            [
                'course_id' => 3,
                'title' => 'گرامر پایه زبان انگلیسی',
                'video_url' => 'https://example.com/videos/english-grammar.mp4',
                'content' => 'مروری بر گرامر پایه و زمان‌های ساده.',
                'order_number' => 1,
            ],
            [
                'course_id' => 3,
                'title' => 'جملات کاربردی روزمره',
                'video_url' => 'https://example.com/videos/daily-phrases.mp4',
                'content' => 'یادگیری جملات رایج در مکالمه‌های روزمره.',
                'order_number' => 2,
            ],
            [
                'course_id' => 4,
                'title' => 'مقدمه‌ای بر بازاریابی در اینستاگرام',
                'video_url' => 'https://example.com/videos/insta-marketing.mp4',
                'content' => 'آشنایی با قدرت اینستاگرام برای رشد کسب‌وکار.',
                'order_number' => 1,
            ],
            [
                'course_id' => 4,
                'title' => 'ساخت پیج حرفه‌ای',
                'video_url' => 'https://example.com/videos/insta-page-setup.mp4',
                'content' => 'آموزش ساخت و بهینه‌سازی پروفایل اینستاگرام.',
                'order_number' => 2,
            ],
        ];

        foreach ($lessons as $lesson) {
            DB::table('lessons')->insert([
                'course_id' => $lesson['course_id'],
                'title' => $lesson['title'],
                'video_url' => $lesson['video_url'],
                'content' => $lesson['content'],
                'order_number' => $lesson['order_number'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
