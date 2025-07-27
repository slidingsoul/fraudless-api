<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('rooms')->insert([
            [
                'RoomId' => '0213',
                'RoomCode' => '0213c7ygtJvVSOf6oOh1cYj9OE3z0pGu3lUZ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'RoomId' => '0311',
                'RoomCode' => '0311ua3giqr3ze10woWDWeUoO9fdKRtFGqC8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'RoomId' => '0307',
                'RoomCode' => '0307HFLW2AVCNEmATAcpDaBZbCa5LEX1ROIt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'RoomId' => '0306',
                'RoomCode' => '0306fosFV0euINlmvAzt0XwJRfBO8Jzvzrtw',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
