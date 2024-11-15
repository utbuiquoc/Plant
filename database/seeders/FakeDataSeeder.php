<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Device;
use App\Models\AirQuality;
use App\Models\Humidity;
use App\Models\Rain;
use App\Models\Nitrogen;
use App\Models\Phosphor;
use App\Models\Potassium;
use App\Models\Conductivity;
use App\Models\SoilTemperature;
use App\Models\SoilMoisture;


class FakeDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 9; $i++) {
            DB::table('air_qualities')->insert([
                'device_id' => 4,
                'value' => rand(50, 60),
                'created_at' => now(),
            ]);
        }
    }
}
