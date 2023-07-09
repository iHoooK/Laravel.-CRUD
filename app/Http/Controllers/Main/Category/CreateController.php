<?php

namespace App\Http\Controllers\Main\Category;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('main.category.create');
    }
}
