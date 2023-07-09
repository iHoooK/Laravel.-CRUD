<?php

namespace App\Http\Controllers\Main\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
    
        try {
            DB::beginTransaction();
            $tags = $data['tag_ids'] ?? null;
        
            if ($tags) {
                unset($data['tag_ids']);
            }
        
            $post->update($data);
            if ($tags) {
                $post->tags()->sync($tags);
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            view($exception->getMessage());
        }
        
        return view('main.post.show', compact('post'));
    }
}
