<?php

namespace App\Http\Controllers\Main\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::all();
        return view('main.post.index', compact('posts'));
    }
}
