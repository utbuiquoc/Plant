<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Events\AirTemp;
use App\Events\pH;
use App\Events\Nitrogen;
use App\Events\Phosphorus;
use App\Events\Potassium;
use App\Events\Humidity;
use App\Events\SoilMoisture;
use App\Events\SoilTemp;
use App\Events\AirQuality;

class FakeDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $airquality = [
            'device_id' => 1,
            'value' => rand(7, 8),
            'created_at' => now(),
        ]; DB::table('air_qualities')->insert($airquality);
        broadcast(new AirQuality($airquality))->toOthers();

        // DB::table('air_qualities')->insert([
        //     'device_id' => 2,
        //     'value' => rand(40, 60),
        //     'created_at' => now(),
        // ]);

        // $nitrogen = [
        //     'device_id' => 1,
        //     'value' => rand(5, 10),
        //     'created_at' => now(),
        // ]; DB::table('nitrogen')->insert($nitrogen);
        // broadcast(new Nitrogen($nitrogen))->toOthers();


        // $phosphorus = [
        //     'device_id' => 1,
        //     'value' => rand(70, 110),
        //     'created_at' => now(),
        // ]; DB::table('phosphorus')->insert($phosphorus);
        // broadcast(new Phosphorus($phosphorus))->toOthers();

        // $potassium = [
        //     'device_id' => 1,
        //     'value' => rand(150, 200),
        //     'created_at' => now(),
        // ]; DB::table('potassium')->insert($potassium);
        // broadcast(new Potassium($potassium))->toOthers();
        
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

        // $soil_temp = [
        //     'device_id' => 1,
        //     'value' => rand(20, 27),
        //     'created_at' => now(),
        // ]; DB::table('soil_temperatures')->insert($soil_temp);
        // broadcast(new SoilTemp($soil_temp))->toOthers();

        // DB::table('soil_temperatures')->insert([
        //     'device_id' => 2,
        //     'value' => rand(20, 27),
        //     'created_at' => now(),
        // ]);

        // $soil_moisture = [
        //     'device_id' => 1,
        //     'value' => rand(50, 75),
        //     'created_at' => now(),
        // ]; DB::table('soil_moistures')->insert($soil_moisture);
        // broadcast(new SoilMoisture($soil_moisture))->toOthers();

        // DB::table('soil_moistures')->insert([
        //     'device_id' => 2,
        //     'value' => rand(50, 75),
        //     'created_at' => now(),
        // ]);

        $humidity = [
            'device_id' => 1,
            'value' => rand(69, 71),
            'created_at' => now(),
        ]; DB::table('humidities')->insert($humidity);
        broadcast(new Humidity($humidity))->toOthers();

        // DB::table('humidities')->insert([
        //     'device_id' => 2,
        //     'value' => rand(15, 20),
        //     'created_at' => now(),
        // ]);

        
        $airtemp = [
            'device_id' => 1,
            'value' => rand(24, 26),
            'created_at' => now(),
        ]; DB::table('airtemps')->insert($airtemp);
        broadcast(new AirTemp($airtemp))->toOthers();

        // $airtemp = [
        //     'device_id' => 2,
        //     'value' => rand(20, 25),
        //     'created_at' => now(),
        // ];

        // DB::table('airtemps')->insert($airtemp);
        // broadcast(new AirTemp($airtemp))->toOthers();

        // DB::table('rain')->insert([
        //     'device_id' => 1,
        //     'start' => now()->addDays(1),
        //     'end' => now()->addDays(1)->addHours(rand(1, 10)),
        //     'created_at' => now(),
        // ]);

        // DB::table('rain')->insert([
        //     'device_id' => 2,
        //     'start' => now()->addDays(1),
        //     'end' => now()->addDays(1)->addHours(rand(1, 10)),
        //     'created_at' => now(),
        // ]);

        // $pH = [
        //     'device_id' => 1,
        //     'value' => rand(5, 10),
        //     'created_at' => now(),
        // ]; DB::table('pH')->insert($pH);
        // broadcast(new pH($pH))->toOthers();

        // DB::table('pH')->insert([
        //     'device_id' => 2,
        //     'value' => rand(5, 10),
        //     'created_at' => now(),
        // ]);
    }
}
