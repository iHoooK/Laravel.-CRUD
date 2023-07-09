<?php

namespace App\Http\Controllers\Main\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tags = Tag::all();
        return view('main.tag.index', compact('tags'));
    }
}
