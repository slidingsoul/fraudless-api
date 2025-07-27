<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LecturerRoleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('lecturer_roles')->insert([
            [
                'LecturerRoleId' => 1,
                'LecturerRole' => 'Primary Instructor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'LecturerRoleId' => 2,
                'LecturerRole' => 'Teaching Assistant',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
