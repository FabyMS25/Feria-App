<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class HomeControler extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index():View
    {
        $posts=Post::query()
            ->where('active','=',1)
            ->whereNotNull('published_at')
            ->whereDate('published_at','<',Carbon::now())
            ->orderBy('published_at','desc')
            ->paginate(5);
        return view('livewire.home',compact('posts'));
    }

    public function byCategory(PostCategory $category)
    {
        $posts=Post::query()
            ->join('post_post_category','posts.id','=','post_post_category.post_id')
            ->where('post_post_category.post_category_id','=',$category->id)
            ->where('active','=',true)
            ->whereDate('published_at','<=',Carbon::now())
            ->orderBy('published_at','desc')
            ->paginate(5);
        return view('index',compact('posts'));
    }
    public function show(Post $post)
    {
        if(!$post->active || $post->published_at > Carbon::now()){
            throw new NotFoundHttpException();
        }
        $next =Post::query()
            ->where('active',true)
            ->whereDate('published_at','<=',Carbon::now())
            ->whereDate('published_at','<',$post->published_at)
            ->orderBy('published_at','desc')
            ->limit(1)
            ->first();
        $prev =Post::query()
            ->where('active',true)
            ->whereDate('published_at','<=',Carbon::now())
            ->whereDate('published_at','>',$post->published_at)
            ->orderBy('published_at','asc')
            ->limit(1)
            ->first();

        return view('pages.posts.view',compact('post','prev','next'));
    }
    // public function __invoke(Request $request)
    // {
    //     return view('index',[
    //         'posts'=>Post::take(3)->get(),
    //         'latestPost'=>Post::take(9)->get(),
    //     ]);
    // }
}
