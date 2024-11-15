<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $id;

    public function mount($id) {
        $this->id = $id;
    }
    
    public function render()
    {
        return view('livewire.test')
            ->layout('layouts.app', [
                'header' => 'My page title'
            ]);
    }
}
