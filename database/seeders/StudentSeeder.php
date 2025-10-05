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
            [
            'StudentId' => '2602078146',
            'StudentFullName' => 'DANIEL EBENEZER BUDIHARTO',
            'Email' => 'daniel.budiharto@binus.ac.id',
            'StudentPassword' => '$2y$12$bpDdu32t9d4yFgnKw4Ujaudfw8ObbOVqaCG0oFiwrDgs/pVKmvAiu',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'StudentId' => '2602154930',
            'StudentFullName' => 'RICHARD WIJAYA HARIANTO',
            'Email' => 'richard.harianto@binus.ac.id',
            'StudentPassword' => '$2y$12$yb4jkqi3VrG6CL/JSIgsPOBO9xOQpTgw0/k2GtLFBtddOTPbdaKoW',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'StudentId' => '2602173892',
            'StudentFullName' => 'AGUNG TRIVALDO SAPUTRA',
            'Email' => 'agung.saputra@binus.ac.id',
            'StudentPassword' => '$2y$12$vF3vaJTrBbQrJ4mG8U/RAufurIe4uN8W6Xz5/PoTnPZCIdOrs5M12',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'StudentId' => '2602163336',
            'StudentFullName' => 'DAVIN NAYAKA PANDYA',
            'Email' => 'davin.pandya@binus.ac.id',
            'StudentPassword' => '$2y$12$7ysJy3DQUOJB0s7/oaoJC.uq7YmC/P.vlvgIwhUPyrn6RKwUdBHSq',
            'created_at' => now(),
            'updated_at' => now(),
            ]
        ]);
    }
}
