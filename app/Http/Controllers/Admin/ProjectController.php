<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::latest();
        
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }
        
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }
        
        $projects = $query->paginate(15);
        
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'client' => 'nullable|max:255',
            'project_date' => 'required|date',
            'location' => 'nullable|max:255',
            'domain' => 'nullable|max:255',
            'category' => 'required',
            'short_description' => 'required',
            'context' => 'required',
            'summary' => 'required',
            'hero_image' => 'required|image|max:2048',
            'features' => 'nullable',
            'benefits' => 'nullable',
            'target_audience' => 'nullable',
            'gallery.*' => 'nullable|image|max:2048',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
        ]);
        
        if ($request->hasFile('hero_image')) {
            $validated['hero_image'] = $request->file('hero_image')->store('projects', 'public');
        }
        
        if ($request->hasFile('gallery')) {
            $gallery = [];
            foreach ($request->file('gallery') as $image) {
                $gallery[] = $image->store('projects/gallery', 'public');
            }
            $validated['gallery'] = $gallery;
        }
        
        $validated['features'] = $request->features ? explode("\n", $request->features) : [];
        $validated['benefits'] = $request->benefits ? json_decode($request->benefits, true) : [];
        $validated['target_audience'] = $request->target_audience ? explode("\n", $request->target_audience) : [];
        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_active'] = $request->has('is_active');
        
        Project::create($validated);
        
        return redirect()->route('admin.projects.index')->with('success', 'Projet créé avec succès');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'client' => 'nullable|max:255',
            'project_date' => 'required|date',
            'location' => 'nullable|max:255',
            'domain' => 'nullable|max:255',
            'category' => 'required',
            'short_description' => 'required',
            'context' => 'required',
            'summary' => 'required',
            'hero_image' => 'nullable|image|max:2048',
            'features' => 'nullable',
            'benefits' => 'nullable',
            'target_audience' => 'nullable',
            'gallery.*' => 'nullable|image|max:2048',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
        ]);
        
        if ($request->hasFile('hero_image')) {
            if ($project->hero_image) {
                Storage::disk('public')->delete($project->hero_image);
            }
            $validated['hero_image'] = $request->file('hero_image')->store('projects', 'public');
        }
        
        if ($request->hasFile('gallery')) {
            $gallery = $project->gallery ?? [];
            foreach ($request->file('gallery') as $image) {
                $gallery[] = $image->store('projects/gallery', 'public');
            }
            $validated['gallery'] = $gallery;
        }
        
        $validated['features'] = $request->features ? explode("\n", $request->features) : [];
        $validated['benefits'] = $request->benefits ? json_decode($request->benefits, true) : [];
        $validated['target_audience'] = $request->target_audience ? explode("\n", $request->target_audience) : [];
        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_active'] = $request->has('is_active');
        
        $project->update($validated);
        
        return redirect()->route('admin.projects.index')->with('success', 'Projet mis à jour avec succès');
    }

    public function destroy(Project $project)
    {
        if ($project->hero_image) {
            Storage::disk('public')->delete($project->hero_image);
        }
        
        if ($project->gallery) {
            foreach ($project->gallery as $image) {
                Storage::disk('public')->delete($image);
            }
        }
        
        $project->delete();
        
        return redirect()->route('admin.projects.index')->with('success', 'Projet supprimé avec succès');
    }
}
