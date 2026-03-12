<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Récupérer les projets en vedette (2 max)
        $featuredProjects = Project::where('is_active', true)
            ->where('is_featured', true)
            ->latest()
            ->take(2)
            ->get();
        
        // Récupérer les services actifs (3 max pour la section services)
        $services = Service::where('is_active', true)
            ->orderBy('display_order')
            ->take(3)
            ->get();
        
        // Récupérer les témoignages actifs
        $testimonials = Testimonial::where('is_active', true)
            ->orderBy('display_order')
            ->get();
        
        // Récupérer les derniers articles (3 max)
        $recentBlogs = Blog::where('status', 'published')
            ->latest('published_at')
            ->take(3)
            ->get();
        
        return view('home', compact('featuredProjects', 'services', 'testimonials', 'recentBlogs'));
    }
}
