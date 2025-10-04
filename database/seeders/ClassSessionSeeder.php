<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ClassSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Example room and shift arrays for demo
        $rooms = ['0213', '0311', '0307', '0306'];
        $shifts = [1, 2, 3, 4, 5, 6];

        // Classes data (copy from your ClassSeeder)
        $classes = [
            ['ClassId' => 1, 'NumberOfSession' => 13],
            ['ClassId' => 2, 'NumberOfSession' => 26],
            ['ClassId' => 3, 'NumberOfSession' => 13],
            ['ClassId' => 4, 'NumberOfSession' => 13],
            ['ClassId' => 5, 'NumberOfSession' => 26],
            ['ClassId' => 6, 'NumberOfSession' => 13],
            ['ClassId' => 7, 'NumberOfSession' => 13],
            ['ClassId' => 8, 'NumberOfSession' => 13],
            ['ClassId' => 9, 'NumberOfSession' => 12],
            ['ClassId' => 10, 'NumberOfSession' => 6],
            ['ClassId' => 11, 'NumberOfSession' => 6],
            ['ClassId' => 12, 'NumberOfSession' => 26],
            ['ClassId' => 13, 'NumberOfSession' => 13],
            ['ClassId' => 14, 'NumberOfSession' => 26],
            ['ClassId' => 15, 'NumberOfSession' => 13],
            ['ClassId' => 16, 'NumberOfSession' => 13],
            ['ClassId' => 17, 'NumberOfSession' => 13],
            ['ClassId' => 18, 'NumberOfSession' => 6],
            ['ClassId' => 19, 'NumberOfSession' => 13],
            ['ClassId' => 20, 'NumberOfSession' => 13],
            ['ClassId' => 21, 'NumberOfSession' => 13],
        ];

        $sessions = [];
        foreach ($classes as $class) {
            for ($i = 1; $i <= $class['NumberOfSession']; $i++) {
                $sessions[] = [
                    'ClassId' => $class['ClassId'],
                    'SessionDate' => date('Y-m-d', strtotime("2022-09-01 +".($i-1)." week")),
                    'RoomId' => $rooms[($class['ClassId'] + $i) % count($rooms)],
                    'SessionNumber' => $i,
                    'Shift' => $shifts[($i-1) % count($shifts)],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('class_sessions')->insert($sessions);
    }
}
