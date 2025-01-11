<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Device;

class Map extends Component
{
    public $data = [];

    public function mount($ids) {
        if ($ids == "0") {
            $this->data = Device::all();
        } else {
            $this->data[0] = Device::find($ids);
        }
    }

    public function render()
    {
        return view('livewire.map');
    }
}
