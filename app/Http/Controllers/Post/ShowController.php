<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $date = Carbon::parse($post->created_at);
        $relatedPosts = Post::whereHas('tags', function ($query) use ($post) {
            $query->whereIn('tag_id', $post->tags->pluck('id'));
        })->where('id', '!=', $post->id)->get()->take(5);

        return view('post.show', compact('post', 'date', 'relatedPosts'));
    }
}
