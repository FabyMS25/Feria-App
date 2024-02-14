<?php

namespace App\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        $user = auth()->user();
        $roles = auth()->user()->roles;

        $company=$user->companies->first();

        return view('livewire.profile',['user'=>$user,'company'=>$company]);

    }
}
