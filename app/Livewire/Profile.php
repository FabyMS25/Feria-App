<?php

namespace App\Livewire;

use App\Models\Company;
use Filament\Facades\Filament;
use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        $user = auth()->user();
        $roles = auth()->user()->roles;

        $company = Filament::getTenant(Company::class);

        return view('livewire.profile',['user'=>$user,'company'=>$company]);

    }
}
