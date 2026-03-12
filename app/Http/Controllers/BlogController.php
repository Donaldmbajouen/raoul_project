<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Blog::where('status', 'published')
            ->with('user')
            ->latest('published_at');
        
        // Filtrer par catégorie si présent
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }
        
        // Recherche
        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('excerpt', 'like', '%' . $request->search . '%')
                  ->orWhere('content', 'like', '%' . $request->search . '%');
            });
        }
        
        $blogs = $query->paginate(9);
        
        // Récupérer toutes les catégories pour le filtre
        $categories = Blog::where('status', 'published')
            ->distinct()
            ->pluck('category')
            ->filter();
        
        return view('blog', compact('blogs', 'categories'));
    }
    
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('status', 'published')
            ->with('user')
            ->firstOrFail();
        
        // Articles similaires (même catégorie)
        $relatedBlogs = Blog::where('status', 'published')
            ->where('category', $blog->category)
            ->where('id', '!=', $blog->id)
            ->latest('published_at')
            ->take(3)
            ->get();
        
        return view('blog-single', compact('blog', 'relatedBlogs'));
    }
}
