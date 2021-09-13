<?php

namespace App\Http\Controllers\frontend;

use Wink\WinkPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(12);
        return view('frontend.blog', [
            'posts' => $posts,
        ]);
    }
    public function show($slug)
    {
        $post = WinkPost::live()->whereSlug($slug)->firstOrFail();
        return view('frontend.blog_show', [
            'post' => $post
        ]);
    }
}
