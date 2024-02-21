<?php

namespace App\Livewire;

use App\Models\Company;
use App\Models\Post;
use Filament\Facades\Filament;
use Livewire\Component;
use Livewire\Attributes\Url;

class ShowPostProfile extends Component
{

    #[Url]
    public Post $record;

    public function mount(Post $record)
    {
        $this->record = $record;
    }

    public function render()
    {
        $user = auth()->user();
        $company = Filament::getTenant(Company::class);

            $posts=Post::query()
                ->where('id','=',$this->record->id)
                ->paginate(1);
        return view('livewire.show-post-profile',['posts'=>$posts,'user'=>$user,'company'=>$company]);
    }
}
