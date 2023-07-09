<?php

namespace App\Http\Controllers\Main\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\Tag\UpdateRequest;
use App\Models\Tag;

class DestroyController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tag.index');
    }
}
