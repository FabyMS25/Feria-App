<?php

namespace App\Livewire;

use App\Models\Company;
use App\Models\Post;
use Carbon\Carbon;
use Filament\Facades\Filament;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Url;

class Profile extends Component
{

    #[Url]
    public $postId =null;

    public function render()
    {
        $user = auth()->user();
        $roles = auth()->user()->roles;
        $company = Filament::getTenant(Company::class);


        if(!empty($this->postId)){
            $posts= Post::findOrFail($this->postId);

        }else{
            $posts=Post::query()
                ->where('active','=',1)
                ->whereNotNull('published_at')
                // ->whereDate('published_at','<',Carbon::now())
                ->orderBy('published_at','desc')
                ->paginate(5);
        }


        return view('livewire.profile',['posts'=>$posts,'user'=>$user,'company'=>$company]);

    }
}
