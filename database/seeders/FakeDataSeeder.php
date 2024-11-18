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
        // DB::table('air_qualities')->insert([
        //     'device_id' => 1,
        //     'value' => rand(40, 60),
        //     'created_at' => now(),
        // ]);

        // DB::table('air_qualities')->insert([
        //     'device_id' => 2,
        //     'value' => rand(40, 60),
        //     'created_at' => now(),
        // ]);

        // DB::table('nitrogen')->insert([
        //     'device_id' => 1,
        //     'value' => rand(5, 10),
        //     'created_at' => now(),
        // ]);

        // DB::table('phosphorus')->insert([
        //     'device_id' => 1,
        //     'value' => rand(70, 110),
        //     'created_at' => now(),
        // ]);

        // DB::table('potassium')->insert([
        //     'device_id' => 1,
        //     'value' => rand(150, 200),
        //     'created_at' => now(),
        // ]);
        
        // DB::table('nitrogen')->insert([
        //     'device_id' => 2,
        //     'value' => rand(5, 10),
        //     'created_at' => now(),
        // ]);

        // DB::table('phosphorus')->insert([
        //     'device_id' => 2,
        //     'value' => rand(70, 110),
        //     'created_at' => now(),
        // ]);

        // DB::table('potassium')->insert([
        //     'device_id' => 2,
        //     'value' => rand(150, 200),
        //     'created_at' => now(),
        // ]);

        // DB::table('soil_temperatures')->insert([
        //     'device_id' => 1,
        //     'value' => rand(20, 27),
        //     'created_at' => now(),
        // ]);

        // DB::table('soil_temperatures')->insert([
        //     'device_id' => 2,
        //     'value' => rand(20, 27),
        //     'created_at' => now(),
        // ]);

        // DB::table('soil_moistures')->insert([
        //     'device_id' => 1,
        //     'value' => rand(50, 75),
        //     'created_at' => now(),
        // ]);

        // DB::table('soil_moistures')->insert([
        //     'device_id' => 2,
        //     'value' => rand(50, 75),
        //     'created_at' => now(),
        // ]);


        // DB::table('humidities')->insert([
        //     'device_id' => 1,
        //     'value' => rand(15, 20),
        //     'created_at' => now(),
        // ]);

        // DB::table('humidities')->insert([
        //     'device_id' => 2,
        //     'value' => rand(15, 20),
        //     'created_at' => now(),
        // ]);

        
        // DB::table('airtemps')->insert([
        //     'device_id' => 1,
        //     'value' => rand(20, 25),
        //     'created_at' => now(),
        // ]);

        // DB::table('airtemps')->insert([
        //     'device_id' => 2,
        //     'value' => rand(20, 25),
        //     'created_at' => now(),
        // ]);

        DB::table('rain')->insert([
            'device_id' => 1,
            'start' => now()->addDays(10),
            'end' => now()->addDays(10)->addHours(rand(1, 10)),
            'created_at' => now(),
        ]);

        DB::table('rain')->insert([
            'device_id' => 2,
            'start' => now()->addDays(10),
            'end' => now()->addDays(10)->addHours(rand(1, 10)),
            'created_at' => now(),
        ]);

        // DB::table('pH')->insert([
        //     'device_id' => 1,
        //     'value' => rand(5, 10),
        //     'created_at' => now(),
        // ]);

        // DB::table('pH')->insert([
        //     'device_id' => 2,
        //     'value' => rand(5, 10),
        //     'created_at' => now(),
        // ]);
    }
}
