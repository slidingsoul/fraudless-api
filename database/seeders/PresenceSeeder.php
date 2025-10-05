<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PresenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sessions = DB::table('class_sessions')->get();

        $studentIds = [
            '2602078146',
            '2602154930', 
            '2602173892',
            '2602163336',
        ];

        $presences = [];

        foreach ($sessions as $session) {
            
            // For each student, create a presence record for the current session
            foreach ($studentIds as $studentId) {
                $presences[] = [
                    'SessionId' => $session->SessionId,
                    'StudentId' => $studentId,
                    'IsInCorrectLocation' => (bool)random_int(0, 1),
                    'IsCorrectFace' => (bool)random_int(0, 1),
                    'IsVerified' => (bool)random_int(0, 1),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        // 5. Lakukan single bulk insert
        DB::table('presence')->insert($presences);
    }
}