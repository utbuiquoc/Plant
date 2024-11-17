<?php

namespace App\Livewire\Charts;

use Livewire\Component;
use App\Models\Device;
use App\Models\SoilTemperature;

class Soiltemp extends Component
{
    public $id = [];
    public $data = [];

    public function mount($ids) {
        if ($ids == 0) {
            for ($i = 0; $i < Device::count(); $i++) {
                $this->data[$i] = SoilTemperature::where('device_id', $i+1)->get();
            }
        } else {
            $this->data[0] = SoilTemperature::where('device_id', $ids)->get();
        }
    }

    public function render()
    {
        return view('livewire.charts.soiltemp');
    }
}
