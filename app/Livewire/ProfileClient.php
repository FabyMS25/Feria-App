<?php

namespace App\Livewire;

use Livewire\Component;

class ProfileClient extends Component
{
    public function render()
    {
        $client = auth()->user();
        return view('livewire.profile-client',['client'=>$client]);
    }
}
