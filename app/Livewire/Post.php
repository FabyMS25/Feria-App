<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\Post as ModelsPost;
use Filament\Facades\Filament;
use Livewire\Component;

class Post extends Component
{
    public $post;

    public function mount()
    {
        $slug = 'post-de-empresa-a';
        $this->post = ModelsPost::where('slug', $slug)->first();
    }

    public function render()
    {
        $user = auth()->user();

        $company = Filament::getTenant(Company::class);

        $slug = 'post-de-empresa-a';
        // $post = ModelsPost::where('slug', $slug)->first();
        return view('livewire.post', ['user' => $user,  'company' => $company]);
    }
}
