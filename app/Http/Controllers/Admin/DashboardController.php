<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'new_contacts' => \App\Models\Contact::where('status', 'new')->count(),
            'total_contacts' => \App\Models\Contact::count(),
            'published_articles' => \App\Models\Blog::where('status', 'published')->count(),
            'draft_articles' => \App\Models\Blog::where('status', 'draft')->count(),
            'active_projects' => \App\Models\Project::where('is_active', true)->count(),
            'total_projects' => \App\Models\Project::count(),
            'active_services' => \App\Models\Service::where('is_active', true)->count(),
            'active_trainings' => \App\Models\Training::where('is_active', true)->count(),
            'active_testimonials' => \App\Models\Testimonial::where('is_active', true)->count(),
        ];
        
        $recent_contacts = \App\Models\Contact::latest()->take(5)->get();
        $recent_blogs = \App\Models\Blog::with('user')->latest()->take(5)->get();
        
        return view('admin.dashboard', compact('stats', 'recent_contacts', 'recent_blogs'));
    }
}
