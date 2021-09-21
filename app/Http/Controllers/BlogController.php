<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $data = [
            'posts' => Post::orderBy('created_at', 'desc')->where('status','PUBLISHED')->paginate(6)
        ];
        return view('blog.index', $data);
    }

    public function detail($slug)
    {
        return view('blog.detail',['post' => Post::where('slug', $slug)->firstOrfail()]);
    }
}
