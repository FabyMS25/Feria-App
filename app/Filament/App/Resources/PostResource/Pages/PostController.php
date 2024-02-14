<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function view(Post $post)
    {
        // Implement logic to load the user selection interface
        return view('promotion', ['post' => $post]);
    }
}
