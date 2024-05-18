<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class Dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $post = Post::latest()->paginate(10);
        return view('dashboard.posts.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('dashboard.posts.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|min:5',
            'body' => 'required|min:5',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $image = $request->file('image');
        $image->storeAs('public/article', $image->hashName());

        Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $image->hashName(),
        ]);


        return redirect()->route('dashboard.index')->with(['success' => 'Berhasil menambahkan artikel!!']);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $slug): View
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('dashboard.posts.show', compact('post'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug): View
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('dashboard.posts.edit', compact('post'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug): RedirectResponse
    {
        $request->validate([
            'title' => 'required|min:10',
            'body' => 'required|min:5',
            'image' => 'image|mimes:jpeg,jpg,png|max:2048', // image is optional
        ]);

        $post = Post::where('slug', $slug)->firstOrFail();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/article', $image->hashName());

            // Delete old image
            Storage::delete('public/article/' . $post->image);

            $post->update([
                'image' => $image->hashName(),
            ]);
        }

        $post->update([
            'title' => $request->title,
            'body' => $request->body,
            'slug' => Str::slug($request->title),
        ]);

        return redirect()->route('dashboard.index')->with(['success' => 'Artikel berhasil di update']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug): RedirectResponse
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        Storage::delete('public/article/' . $post->image);
        $post->delete();

        return redirect()->route('dashboard.index')->with(['success' => 'Artikel berhasil dihapus']);
    }

}

