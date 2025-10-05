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
            [
                'LecturerId' => 'D6261',
                'LecturerFullName' => 'Mirza Ramadhani, S.Kom., M.Kom.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'LecturerId' => 'D5848',
                'LecturerFullName' => 'Sidharta, S.Si., M.MT.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'LecturerId' => 'D6071',
                'LecturerFullName' => 'Priskardus Hermanto Candra, S.S., M.Hum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'LecturerId' => 'D6394',
                'LecturerFullName' => 'M. Aldiki Febriantono, S.T., M.T.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'LecturerId' => 'D6494',
                'LecturerFullName' => 'Nyoman Wira Prasetya, S.Kom., M.T., M.Sc.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'LecturerId' => 'TM001',
                'LecturerFullName' => 'Hanley Yunanda Saputra',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'LecturerId' => 'D6371',
                'LecturerFullName' => 'Frihandika Permana, S.Pd., M.Kom.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'LecturerId' => 'D6066',
                'LecturerFullName' => 'Fairuz Iqbal Maulana, S.T., M.T.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'LecturerId' => 'D6747',
                'LecturerFullName' => 'Milkhatussyafa\'ah Taufiq, S.T., M.T.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'LecturerId' => 'D6553',
                'LecturerFullName' => 'Riza Rizqiyah, S.M., MBA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'LecturerId' => 'D6910',
                'LecturerFullName' => 'Dio Saputra Kudori, S.Kom., M.Kom.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
