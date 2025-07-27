<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            'StudentId' => '2602078146',
            'StudentFullName' => 'DANIEL EBENEZER BUDIHARTO',
            'Email' => 'daniel.budiharto@binus.ac.id',
            'StudentPassword' => '$2y$12$bpDdu32t9d4yFgnKw4Ujaudfw8ObbOVqaCG0oFiwrDgs/pVKmvAiu',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
