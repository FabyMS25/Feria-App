<?php

namespace App\Livewire;

use App\Models\Post;
use Carbon\Carbon;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home');
    }
}
