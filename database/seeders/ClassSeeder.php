<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('classes')->insert([
            [
                'ClassId' => 1,
                'LecturerId' => 'DW211',
                'CourseId' => 'COMP6360004',
                'ClassCode' => 'BC20',
                'LecturerRoleId' => 2,
                'ClassYear' => 2022,
                'Semester' => 1,
                'NumberOfSession' => 13,
                'CourseCategory' => 'LAB',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ClassId' => 2,
                'LecturerId' => 'D6671',
                'CourseId' => 'COMP6360004',
                'ClassCode' => 'LB20',
                'LecturerRoleId' => 1,
                'ClassYear' => 2022,
                'Semester' => 1,
                'NumberOfSession' => 26,
                'CourseCategory' => 'LEC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ClassId' => 3,
                'LecturerId' => 'D3708',
                'CourseId' => 'COMP6764004',
                'ClassCode' => 'LB20',
                'LecturerRoleId' => 1,
                'ClassYear' => 2022,
                'Semester' => 1,
                'NumberOfSession' => 13,
                'CourseCategory' => 'LEC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ClassId' => 4,
                'LecturerId' => 'D5975',
                'CourseId' => 'MATH6119004',
                'ClassCode' => 'LB20',
                'LecturerRoleId' => 1,
                'ClassYear' => 2022,
                'Semester' => 1,
                'NumberOfSession' => 13,
                'CourseCategory' => 'LEC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ClassId' => 5,
                'LecturerId' => 'D6365',
                'CourseId' => 'MATH6118004',
                'ClassCode' => 'LB20',
                'LecturerRoleId' => 1,
                'ClassYear' => 2022,
                'Semester' => 1,
                'NumberOfSession' => 26,
                'CourseCategory' => 'LEC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ClassId' => 6,
                'LecturerId' => 'D6404',
                'CourseId' => 'COMP6840004',
                'ClassCode' => 'LB20',
                'LecturerRoleId' => 1,
                'ClassYear' => 2022,
                'Semester' => 1,
                'NumberOfSession' => 13,
                'CourseCategory' => 'LEC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
