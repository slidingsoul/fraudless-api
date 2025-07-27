<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('courses')->insert([
            [
                'CourseId' => 'COMP6360004',
                'CourseName' => 'Algorithm and Programming',
                'CourseCategory' => 'LAB',
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6360004',
                'CourseName' => 'Algorithm and Programming',
                'CourseCategory' => 'LEC',
                'Credit' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6764004',
                'CourseName' => 'Basic Statistics',
                'CourseCategory' => 'LEC',
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'MATH6119004',
                'CourseName' => 'Linear Algebra',
                'CourseCategory' => 'LEC',
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'MATH6118004',
                'CourseName' => 'Discrete Mathematics',
                'CourseCategory' => 'LEC',
                'Credit' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CourseId' => 'COMP6840004',
                'CourseName' => 'Program Design Methods',
                'CourseCategory' => 'LEC',
                'Credit' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
