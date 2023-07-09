<?php

namespace App\Http\Controllers\Main\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        return view('main.post.show', compact('post'));
    }
}
