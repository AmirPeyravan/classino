<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
 public function run(): void
    {
        $categories = [
            'برنامه‌نویسی',
            'طراحی گرافیک',
            'زبان‌های خارجی',
            'بازاریابی دیجیتال',
            'علوم داده',
            'مهارت‌های نرم',
            'حسابداری و مالی',
            'مدیریت و کسب‌وکار',
            'هنر و موسیقی',
            'دروس مدرسه و دانشگاه',
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category,
                'slug' => Str::slug($category, '-'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
