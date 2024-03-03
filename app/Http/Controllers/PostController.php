<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('posts',[
            'head_title' => 'All Post',
            'title' => 'All Post',
            // 'posts' => Post::all()
            'posts' => Post::with(['author','category'])->latest()->get()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            'head_title' => $post->title,
            'title' => $post->title,                            
            'post' => $post
        ]);
    }
}
