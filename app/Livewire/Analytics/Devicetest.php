<?php

namespace App\Livewire\Analytics;

use Livewire\Component;
use Livewire\Attributes\Title;

class Devicetest extends Component
{    
    #[Title('Device Test')]
    public function render()
    {
        return view('livewire.analytics.devicetest');
    }
}
