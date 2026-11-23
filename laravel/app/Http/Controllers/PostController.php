<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderByDesc('published_at')->paginate(12);

        return view('pages.news.index', compact('posts'));
    }

    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('pages.news.show', compact('post'));
    }
}
