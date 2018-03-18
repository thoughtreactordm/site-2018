<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::latest()
            ->whereStatus('PUBLISHED')
            ->paginate(3);

        return view('pages.home', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::whereSlug($slug)->first();
        $related = Post::latest()
            ->where('category_id', $post->category_id)
            ->where('id', '<>', $post->id)
            ->whereStatus('PUBLISHED')
            ->orderBy('created_at', 'desc')
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
