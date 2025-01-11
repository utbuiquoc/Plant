<?php

namespace App\Livewire\Analytics;

use Livewire\Component;

class Device extends Component
{
    public $id;

    public function mount($id) {
        $this->id = $id;
    }
    
    public function render()
    {
        return view('livewire.analytics.device')
            ->title('Thiết bị ' . $this->id);
    }
}
