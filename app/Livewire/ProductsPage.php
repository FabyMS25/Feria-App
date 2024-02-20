<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\PostCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Url;
use Livewire\Component;

class ProductsPage extends Component
{
    #[Url]
    public $categorySlug =null;
    public function render()
    {
        if(!empty($this->categorySlug)){
            $category= PostCategory::where('slug',$this->categorySlug)->first();

            if(empty($category)){
                abort(404);
            }
            $posts=Post::query()
                ->join('post_post_category','posts.id','=','post_post_category.post_id')
                ->where('post_post_category.post_category_id','=',$category->id)
                ->where('active','=',true)
                // ->whereDate('published_at','<=',Carbon::now())
                ->orderBy('published_at','desc')
                ->paginate(5);
        }else{
            $posts=Post::query()
                ->where('active','=',1)
                ->whereNotNull('published_at')
                ->whereDate('published_at','<',Carbon::now())
                ->orderBy('published_at','desc')
                ->paginate(5);
        }


        $categories=PostCategory:: query()
            ->join('post_post_category','post_categories.id','=','post_post_category.post_category_id')
            ->select('post_categories.name','post_categories.slug',DB::raw('count(*) as total'))
            ->groupBy('post_categories.id')
            ->orderByDesc('total')
            ->limit(5)
            ->get();

        return view('livewire.products-page', [
            'posts'=> $posts,
            'categories'=>$categories
        ]);
    }
}
