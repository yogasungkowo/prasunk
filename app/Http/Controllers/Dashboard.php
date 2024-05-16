<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class Dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('dashboard.posts.index');
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
            'title' => 'required|min:10',
            'slug' => 'required|min:5',
            'body' => 'required|min:5',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $image = $request->file('image');
        $image->storeAs('article/image', $image->hashName());

        Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
            'image' => $image->hashName(),
        ]);

        return redirect()->route('dashboard.posts.index')->with(['success' => 'Berhasil menambahkan artikel!!']);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
