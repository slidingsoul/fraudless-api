<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LookupCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lookup_categories')->insert([
            [
                'lookupcategoryname' => 'BINUS_MALANG_LOCATION',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lookupcategoryname' => 'LOCATION_OFFSET_IN_METER',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
