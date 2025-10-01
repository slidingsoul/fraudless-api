<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LookupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locationCategoryId = DB::table('lookup_categories')
            ->where('lookupcategoryname', 'BINUS_MALANG_LOCATION')
            ->value('lookupcategoryid');

        $offsetCategoryId = DB::table('lookup_categories')
            ->where('lookupcategoryname', 'LOCATION_OFFSET_IN_METER')
            ->value('lookupcategoryid');

        DB::table('lookups')->insert([
            [
                'lookupcategoryid' => $locationCategoryId,
                'lookupcode' => 'BML01',
                'lookupdescription' => 'Latitude BINUS Malang',
                'lookupvalue' => '-7.9675112.6326',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lookupcategoryid' => $locationCategoryId,
                'lookupcode' => 'BML02',
                'lookupdescription' => 'Longtitude BINUS Malang',
                'lookupvalue' => '-7.9675112.6326',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'lookupcategoryid' => $offsetCategoryId,
                'lookupcode' => 'OFF01',
                'lookupdescription' => 'Offset lokasi default dalam meter',
                'lookupvalue' => '250',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
