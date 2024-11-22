<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class Warning extends Component
{
    #[Title('Warning')]
    public function render()
    {
        return view('livewire.warning');
    }
}
