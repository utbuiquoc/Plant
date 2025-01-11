<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Device;
use Illuminate\Support\Facades\Route;

class Sidebar extends Component
{
    public $devices = [];
    public $route_id;

    public function mount() {
        $this->route_id = Route::current()->parameter('id');
        $this->devices = Device::all();
    }
    
    public function render()
    {
        return view('livewire.sidebar');
    }
}
