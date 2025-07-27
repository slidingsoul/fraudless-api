<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShiftSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('shifts')->insert([
            [
                'Shift' => 1,
                'TimeStart' => '07:20:00',
                'TimeEnd' => '09:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Shift' => 2,
                'TimeStart' => '09:20:00',
                'TimeEnd' => '11:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Shift' => 3,
                'TimeStart' => '11:20:00',
                'TimeEnd' => '13:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Shift' => 4,
                'TimeStart' => '13:20:00',
                'TimeEnd' => '15:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Shift' => 5,
                'TimeStart' => '15:20:00',
                'TimeEnd' => '17:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Shift' => 6,
                'TimeStart' => '17:20:00',
                'TimeEnd' => '19:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
