<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            [
                'title' => 'Laravel Dasar untuk Pemula',
                'description' => 'Pelajari dasar-dasar framework Laravel dengan studi kasus nyata.',
                'image' => 'laravel-course.jpg',
                'level' => 'Beginner',
                'price' => 0,
            ],
            [
                'title' => 'Bootstrap 5 Lanjutan',
                'description' => 'Membangun tampilan web profesional dengan Bootstrap 5.',
                'image' => 'bootstrap-course.jpg',
                'level' => 'Intermediate',
                'price' => 0,
            ],
            // Tambah 3–4 data lain sesuai kebutuhan
        ]);
    }
}
