<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Analytics extends Component
{
    #[Title('Analytics')]
    public function render()
    {
        return view('livewire.analytics');
    }
}
