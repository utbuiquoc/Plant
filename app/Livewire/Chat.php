<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\AirQuality;
use App\Models\Airtemp;
use App\Models\Device;
use App\Models\Humidity;
use App\Models\Nitrogen;
use App\Models\pH;
use App\Models\Phosphorus;
use App\Models\Potassium;
use App\Models\Rain;
use App\Models\SoilMoisture;
use App\Models\SoilTemperature;
use App\Models\Conductivity;

class Chat extends Component
{
    public $id = [];
    public $data = [];
    
    public $AirQuality = 0;
    public $Airtemp = 0;
    public $Device = 0;
    public $Humidity = 0;
    public $pH = 0;
    public $Nitrogen = 0;
    public $Phosphorus = 0;
    public $Potassium = 0;
    public $Rain = 0;
    public $SoilMoisture = 0;
    public $SoilTemperature = 0;
    public $Conductivity = 0;

    public function mount() {
        $num_devices = Device::count();
        
        for ($i = 0; $i < $num_devices; $i++) {
            $this->AirQuality       += (int)AirQuality::where('device_id', $i+1)->orderBy('id', 'DESC')->first()->value;
            $this->Airtemp          += (int)Airtemp::where('device_id', $i+1)->orderBy('id', 'DESC')->first()->value;
            $this->Humidity         += (int)Humidity::where('device_id', $i+1)->orderBy('id', 'DESC')->first()->value;
            $this->pH               += (int)pH::where('device_id', $i+1)->orderBy('id', 'DESC')->first()->value;
            $this->Nitrogen         += (int)Nitrogen::where('device_id', $i+1)->orderBy('id', 'DESC')->first()->value;
            $this->Phosphorus       += (int)Phosphorus::where('device_id', $i+1)->orderBy('id', 'DESC')->first()->value;
            $this->Potassium        += (int)Potassium::where('device_id', $i+1)->orderBy('id', 'DESC')->first()->value;
            $this->SoilMoisture     += (int)SoilMoisture::where('device_id', $i+1)->orderBy('id', 'DESC')->first()->value;
            $this->SoilTemperature  += (int)SoilTemperature::where('device_id', $i+1)->orderBy('id', 'DESC')->first()->value;
            $this->Conductivity     += (int)Conductivity::where('device_id', $i+1)->orderBy('id', 'DESC')->first()->value;
        }
        
        $this->AirQuality       /= $num_devices;
        $this->Airtemp          /= $num_devices;
        $this->Humidity         /= $num_devices;
        $this->pH               /= $num_devices;
        $this->Nitrogen         /= $num_devices;
        $this->Phosphorus       /= $num_devices;
        $this->Potassium        /= $num_devices;
        $this->SoilMoisture     /= $num_devices;
        $this->SoilTemperature  /= $num_devices;
        $this->Conductivity     /= $num_devices;
    }

    public function render()
    {
        return view('livewire.chat');
    }
}
