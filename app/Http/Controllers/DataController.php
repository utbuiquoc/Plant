<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Facades\DB;


use App\Models\Humidity as airhumidity;
use App\Models\Airtemp as airtempe;

use App\Events\AirTemp;
use App\Events\pH;
use App\Events\Nitrogen;
use App\Events\Phosphorus;
use App\Events\Potassium;
use App\Events\Humidity;
use App\Events\SoilMoisture;
use App\Events\SoilTemp;
use App\Events\AirQuality;
use App\Events\Conductivity;

class DataController extends Controller
{
    public function test() {
        $result = Process::run('cd /var/www/html/Plant && php artisan db:seed --class=FakeDataSeeder');

        return $result->output();
    }

    public function insert($humidity, $temperature, $soilmoisture, $soiltemp, $conductivity, $pH, $nitrogen, $phosphorus, $potassium) {
        if ($humidity > 100)
            $humidity = (int)airhumidity::where('device_id', 1)->orderBy('id', 'DESC')->first()->value;

        $humidity_row = [
            'device_id' => 1,
            'value' => $humidity,
            'created_at' => now()->setTimezone('Asia/Ho_Chi_Minh'),
        ]; DB::table('humidities')->insert($humidity_row);
        broadcast(new Humidity($humidity_row))->toOthers();
        
        if ($temperature > 100)
        $temperature = (int)airtempe::where('device_id', 1)->orderBy('id', 'DESC')->first()->value;
        $airtemp = [
            'device_id' => 1,
            'value' => $temperature,
            'created_at' => now()->setTimezone('Asia/Ho_Chi_Minh'),
        ]; DB::table('airtemps')->insert($airtemp);
        broadcast(new AirTemp($airtemp))->toOthers();

        $soil_moisture = [
            'device_id' => 1,
            'value' => $soilmoisture / 10,
            'created_at' => now()->setTimezone('Asia/Ho_Chi_Minh'),
        ]; DB::table('soil_moistures')->insert($soil_moisture);
        broadcast(new SoilMoisture($soil_moisture))->toOthers();

        $soil_temp = [
            'device_id' => 1,
            'value' => $soiltemp / 10,
            'created_at' => now()->setTimezone('Asia/Ho_Chi_Minh'),
        ]; DB::table('soil_temperatures')->insert($soil_temp);
        broadcast(new SoilTemp($soil_temp))->toOthers();

        $conductivity_row = [
            'device_id' => 1,
            'value' => $conductivity,
            'created_at' => now()->setTimezone('Asia/Ho_Chi_Minh'),
        ]; DB::table('conductivities')->insert($conductivity_row);
        broadcast(new Conductivity($conductivity_row))->toOthers();

        $pH_row = [
            'device_id' => 1,
            'value' => $pH / 10,
            'created_at' => now()->setTimezone('Asia/Ho_Chi_Minh'),
        ]; DB::table('pH')->insert($pH_row);
        broadcast(new pH($pH_row))->toOthers();

        $nitrogen_row = [
            'device_id' => 1,
            'value' => $nitrogen,
            'created_at' => now()->setTimezone('Asia/Ho_Chi_Minh'),
        ]; DB::table('nitrogen')->insert($nitrogen_row);
        broadcast(new Nitrogen($nitrogen_row))->toOthers();
        
        $phosphorus_row = [
            'device_id' => 1,
            'value' => $phosphorus,
            'created_at' => now()->setTimezone('Asia/Ho_Chi_Minh'),
        ]; DB::table('phosphorus')->insert($phosphorus_row);

        $potassium_row = [
            'device_id' => 1,
            'value' => $potassium,
            'created_at' => now()->setTimezone('Asia/Ho_Chi_Minh'),
        ]; DB::table('potassium')->insert($potassium_row);
        
        return 'sucess';
    }
}
