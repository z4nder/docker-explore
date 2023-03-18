<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home()
    {
        $posts = Post::all();

        return view('posts', [
            'posts' => $posts
        ]);
    }

    public function index(){
        return Post::all();
    }
    public function show(Post $post){
        return $post;
    }
}
