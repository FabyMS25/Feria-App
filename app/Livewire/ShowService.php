<?php

namespace App\Livewire;

use Livewire\Component;

class ShowService extends Component
{
    public $service;
    public function mount($service){
        $this->service = $service;
    }
    public function render()
    {
        return view('livewire.show-services',[
            'service' => $this->service
        ]);
    }
}
