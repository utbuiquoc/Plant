<?php

namespace App\Livewire\Charts;

use Livewire\Component;
use App\Models\Device;
use App\Models\AirQuality as airqual;

class Airquality extends Component
{
    public $id = [];
    public $data = [];

    public function mount($ids) {
        if ($ids == 0) {
            for ($i = 0; $i < Device::count(); $i++) {
                $this->data[$i] = airqual::where('device_id', $i+1)->get();
            }
        } else {
            $this->data[0] = airqual::where('device_id', $ids)->get();
        }
    }
    public function render()
    {
        return view('livewire.charts.airquality');
    }
}