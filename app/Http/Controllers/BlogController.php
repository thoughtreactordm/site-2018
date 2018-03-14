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

        return view('blog.show', compact('post', 'related'));
    }
}
