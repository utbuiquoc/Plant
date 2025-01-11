<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Device;

class Maps extends Component
{
    public $data;
    
    public function mount()
    {
        $this->data = Device::all();
    }

    #[Title('Map')]
    public function render()
    {
        return view('livewire.maps');
    }
}