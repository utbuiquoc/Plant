<?php

namespace App\Livewire\Charts;

use Livewire\Component;
use App\Models\Device;
use App\Models\SoilMoisture as ec;

class Soilmoisture extends Component
{
    public $id = [];
    public $data = [];

    public function mount($ids) {
        if ($ids == 0) {
            for ($i = 0; $i < Device::count(); $i++) {
                $this->data[$i] = ec::where('device_id', $i+1)->orderBy('id', 'desc')->take(20)->get();
            }
        } else {
            $this->data[0] = ec::where('device_id', $ids)->orderBy('id', 'desc')->take(20)->get();
        }
    }

    public function render()
    {
        return view('livewire.charts.soilmoisture');
    }
}
