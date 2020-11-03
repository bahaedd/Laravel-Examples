<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::status()->get(['id','title']);
        $posts = Post::status(0)->get(['id','title']);

        return view('Category.posts', compact('posts'));
    }
}
