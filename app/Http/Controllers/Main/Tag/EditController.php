<?php

namespace App\Http\Controllers\Main\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(Tag $tag)
    {
        return view('main.tag.edit', compact('tag'));
    }
}
