<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('devices')->insert([
            'name'          => 'Device 1',
            'latitude'      => '17.5065322',
            'longitude'     => '106.5451147',
            'img'           => '../img/sensor-1.jpg',
            'created_at'    => now(),
        ]);

        DB::table('devices')->insert([
            'name'          => 'Device 2',
            'latitude'      => 17.5055322,
            'longitude'     => 106.5421147,
            'img'           => '../img/sensor-2.jpg',
            'created_at'    => now(),
        ]);
    }
}
