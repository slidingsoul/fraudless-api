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

            # Richard Enrollment
            [
                'EnrollmentId' => 7,
                'StudentId' => '2602154930',
                'ClassId' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'EnrollmentId' => 8,
                'StudentId' => '2602154930',
                'ClassId' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'EnrollmentId' => 9,
                'StudentId' => '2602154930',
                'ClassId' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            # Enrollment Davin
            [
                'EnrollmentId' => 10,
                'StudentId' => '2602163336',
                'ClassId' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'EnrollmentId' => 11,
                'StudentId' => '2602163336',
                'ClassId' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'EnrollmentId' => 12,
                'StudentId' => '2602163336',
                'ClassId' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
