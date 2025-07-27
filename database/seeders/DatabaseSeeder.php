<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
        StudentSeeder::class,
        LecturerSeeder::class,
        LecturerRoleSeeder::class,
        ShiftSeeder::class,
        CourseSeeder::class,
        RoomSeeder::class,
        ClassSeeder::class,
        EnrollmentSeeder::class,
        ClassSessionSeeder::class,
        PresenceSeeder::class,
    ]);
    }
}
