<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class SiteController extends Controller
{
    public function index()
    {
        $data = [
            'posts' => Post::orderBy('created_at', 'desc')->where('status','PUBLISHED')->paginate(3)
        ];
        return view('index',$data);
    }
}
