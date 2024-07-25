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

    public function show(string $id): View
    {
        return view('posts.show', [
            'post' => post::findOrFail($id)
        ]);
}

    public function edit(Request $request): View
    {
        return view('post.edit', [
            'user' => $request->user(),
        ]);
    }

};
