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
        // Get all session IDs from class_sessions
        $sessions = DB::table('class_sessions')->get();
        // Example student
        $studentId = '2602078146';
        $studentId = '2602154930';
        $studentId = '2602173892';
        $studentId = '2602163336';

        $presences = [];
        foreach ($sessions as $session) {
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

        DB::table('presence')->insert($presences);
    }
}
