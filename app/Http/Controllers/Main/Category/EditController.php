<?php

namespace App\Http\Controllers\Main\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class EditController extends Controller
{
    public function __invoke(Category $category)
    {
        return view('main.category.edit', compact('category'));
    }
}
