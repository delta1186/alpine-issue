<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WorldTest extends Component
{
    public $world = 'world created';
    public $name = 'yo';
  
    public function updateWorld() {
        $this->name = 'world updated';
        $this->world = 'world updated';
    }
    
    public function render()
    {
        return view('livewire.world-test');
    }
}