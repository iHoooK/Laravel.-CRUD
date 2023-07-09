<?php

namespace App\Http\Controllers\Main\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
    
        try {
            DB::beginTransaction();
            $tags = $data['tag_ids'] ?? null;
        
            if ($tags) {
                unset($data['tag_ids']);
            }
        
            $post = Post::firstOrCreate($data);
            if ($tags) {
                $post->tags()->attach($tags);
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        
        return redirect()->route('post.index');
    }
}
