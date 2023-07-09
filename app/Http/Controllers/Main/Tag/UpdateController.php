<?php

namespace App\Http\Controllers\Main\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\Tag\UpdateRequest;
use App\Models\Tag;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Tag $tag)
    {
        $data = $request->validated();
        $tag->update($data);
        return view('main.tag.show', compact('tag'));
    }
}
