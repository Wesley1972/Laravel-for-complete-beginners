<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
// use GrahamCampbell\ResultType\Success;
// use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
// use League\Uri\Idna\ResultTest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Post::create($validate);

        return redirect()->route('posts.index')
            ->with('success', 'Post created successully. Lol');
    }

    public function show(int $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }
    public function edit(int $id) {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = Post::findOrFail($id);
        $post->update($validated);

        return redirect()->route('posts.index')
            ->with('success', 'Post updated successfully');
    }

    public function destroy(int $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully');
    }
}
