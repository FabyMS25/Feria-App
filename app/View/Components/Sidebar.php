<?php

namespace App\View\Components;

use App\Models\PostCategory;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categories=PostCategory::query()
            ->join('post_post_category','post_categories.id','=','post_post_category.post_category_id')
            ->select('post_categories.name','post_categories.slug',DB::raw('count(*) as total'))
            ->groupBy('post_categories.id')
            ->orderByDesc('total')
            ->get();


        return view('layouts.sidebar',compact('categories'));
    }
}
