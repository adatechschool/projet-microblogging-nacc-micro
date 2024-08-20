<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Post;

class PostController extends Controller
{
    //

    public function index(Request $request): View{

        $posts=Post::all();
        $showModal = $request->query('show_modal', false); // Default to false
        return view('posts.index', compact('posts','showModal'));
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

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image_path' => 'required|max:255',
            'content' => 'required',
        ]);

        Post::create($request->all());
        return redirect()->route('posts.index')
                         ->with('success', 'Post created successfully.');
    }
    public function update(Request $request): View{

        $posts=Post::all();
        return view('posts.index', compact('posts'));
        
    }

    public function create() {
    return view('posts.create');
    }
};
