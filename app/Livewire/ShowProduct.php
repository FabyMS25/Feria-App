<?php

namespace App\Livewire;

use App\Models\Post;
use Carbon\Carbon;
use Livewire\Component;

class ShowProduct extends Component
{
    public $itemSlug=null;
    public function mount($id){
        $this->itemSlug=$id;
    }
    public function render()
    {
        $item=Post::findOrFail($this->itemSlug);

        return view('livewire.show-product', ['item'=> $item]);
    }
}
