<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Maps extends Component
{
    #[Title('Map')]
    public function render()
    {
        return view('livewire.maps');
    }
}
