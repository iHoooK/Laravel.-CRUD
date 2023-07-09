<?php

namespace App\Http\Controllers\Main\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\Category\UpdateRequest;
use App\Models\Category;

class DestroyController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
}
