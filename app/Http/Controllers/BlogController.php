<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function show($slug)
    {
        $post = Post::whereSlug($slug)->first();
        $related = Post::latest()
            ->where('category_id', $post->category_id)
            ->take(3)
            ->get();

        $previous = Post::where('id', '>', $post->id)->first();
        $next = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();

        return view('blog.show', [
            'post' => $post,
            'related' => $related,
            'previous' => $previous,
            'next' => $next
        ]);
    }
}
