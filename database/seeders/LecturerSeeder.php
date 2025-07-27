<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LecturerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('lecturers')->insert([
            [
                'LecturerId' => 'DW211',
                'LecturerFullName' => 'DANIEL ANANDO WANGEAN',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'LecturerId' => 'D6671',
                'LecturerFullName' => 'YULIANTO, S.Kom., M.Kom.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'LecturerId' => 'D3708',
                'LecturerFullName' => 'ALBERT VERASIUS DIAN SANO, S.T., M.Kom.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'LecturerId' => 'D5975',
                'LecturerFullName' => 'WINA PERMANA SARI, S.T., M.Kom.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'LecturerId' => 'D6365',
                'LecturerFullName' => 'CHASANDRA PUSPITASARI, S.Kom., M.Cs.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'LecturerId' => 'D6404',
                'LecturerFullName' => 'GUSTI PANGESTU, S.Kom., M.Kom.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
