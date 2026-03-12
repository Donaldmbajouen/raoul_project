<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Blog::with('user')->latest();
        
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }
        
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }
        
        $blogs = $query->paginate(15);
        
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'nullable',
            'content' => 'required',
            'image' => 'required|image|max:2048',
            'category' => 'required',
            'tags' => 'nullable',
            'published_at' => 'required|date',
            'status' => 'required|in:draft,published',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable',
            'meta_keywords' => 'nullable',
        ]);
        
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('blogs', 'public');
        }
        
        $validated['user_id'] = auth()->id();
        $validated['tags'] = $request->tags ? explode(',', $request->tags) : [];
        
        Blog::create($validated);
        
        return redirect()->route('admin.blogs.index')->with('success', 'Article créé avec succès');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'nullable',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
            'category' => 'required',
            'tags' => 'nullable',
            'published_at' => 'required|date',
            'status' => 'required|in:draft,published',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable',
            'meta_keywords' => 'nullable',
        ]);
        
        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $validated['image'] = $request->file('image')->store('blogs', 'public');
        }
        
        $validated['tags'] = $request->tags ? explode(',', $request->tags) : [];
        
        $blog->update($validated);
        
        return redirect()->route('admin.blogs.index')->with('success', 'Article mis à jour avec succès');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }
        
        $blog->delete();
        
        return redirect()->route('admin.blogs.index')->with('success', 'Article supprimé avec succès');
    }
}
