<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnrollmentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('enrollments')->insert([
            [
                'EnrollmentId' => 1,
                'StudentId' => '2602078146',
                'ClassId' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'EnrollmentId' => 2,
                'StudentId' => '2602078146',
                'ClassId' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'EnrollmentId' => 3,
                'StudentId' => '2602078146',
                'ClassId' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'EnrollmentId' => 4,
                'StudentId' => '2602078146',
                'ClassId' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'EnrollmentId' => 5,
                'StudentId' => '2602078146',
                'ClassId' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'EnrollmentId' => 6,
                'StudentId' => '2602078146',
                'ClassId' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
