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

        $posts = Post::paginate(4); // Paginate with 6 posts per page
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
        'content' => 'required',
        'image' => 'nullable|image|max:2048', // Validate the image (optional)
    ]);

    $imagePath = null;

    // Check if an image is uploaded
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $originalName = $image->getClientOriginalName(); // Get the original name
        $image->move(public_path('img'), $originalName); // Move the image to /public/img/
        $imagePath = '/img/' . $originalName; // Store the relative path
    }

    // Create the post and save the image path if provided
    Post::create([
        'content' => $request->input('content'),
        'image_path' => $imagePath,
    ]);

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
