<?php

namespace App\Http\Controllers\Main\Tag;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('main.tag.create');
    }
}
