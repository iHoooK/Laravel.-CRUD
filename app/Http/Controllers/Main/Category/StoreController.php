<?php

namespace App\Http\Controllers\Main\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\Category\StoreRequest;
use App\Models\Category;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Category::firstOrCreate($data);
        
        return redirect()->route('category.index');
    }
}
