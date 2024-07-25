<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //

    public function index(Request $request): View{

        $posts=Post::all();
        return view('posts.index', compact('posts'));
    }
    // public function show(Request $request): View
    // {
    //     $post=Post;
    //     return view('posts.show', compact('post'));
    // }

    public function edit(Request $request): View
    {
        return view('post.edit', [
            'user' => $request->user(),
        ]);
    }

};
