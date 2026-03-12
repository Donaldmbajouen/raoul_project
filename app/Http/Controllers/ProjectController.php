<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::where('is_active', true)->latest('project_date');
        
        // Filtrer par catégorie
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }
        
        $projects = $query->paginate(9);
        
        // Récupérer toutes les catégories
        $categories = Project::where('is_active', true)
            ->distinct()
            ->pluck('category')
            ->filter();
        
        return view('realizations', compact('projects', 'categories'));
    }
    
    public function show($slug)
    {
        $project = Project::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();
        
        return view('project-single', compact('project'));
    }
}
