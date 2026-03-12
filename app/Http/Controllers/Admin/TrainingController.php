<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrainingController extends Controller
{
    public function index(Request $request)
    {
        $query = Training::latest();
        
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }
        
        $trainings = $query->paginate(15);
        
        return view('admin.trainings.index', compact('trainings'));
    }

    public function create()
    {
        return view('admin.trainings.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'short_description' => 'required',
            'full_description' => 'required',
            'image' => 'required|image|max:2048',
            'duration' => 'nullable|max:255',
            'level' => 'nullable|max:255',
            'price' => 'nullable|numeric',
            'features' => 'nullable',
            'solutions' => 'nullable',
            'pricing_packs' => 'nullable',
            'related_services' => 'nullable',
            'is_active' => 'boolean',
        ]);
        
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('trainings', 'public');
        }
        
        $validated['features'] = $request->features ? explode("\n", $request->features) : [];
        $validated['solutions'] = $request->solutions ? json_decode($request->solutions, true) : [];
        $validated['pricing_packs'] = $request->pricing_packs ? json_decode($request->pricing_packs, true) : [];
        $validated['related_services'] = $request->related_services ? json_decode($request->related_services, true) : [];
        $validated['is_active'] = $request->has('is_active');
        
        Training::create($validated);
        
        return redirect()->route('admin.trainings.index')->with('success', 'Formation créée avec succès');
    }

    public function edit(Training $training)
    {
        return view('admin.trainings.edit', compact('training'));
    }

    public function update(Request $request, Training $training)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'short_description' => 'required',
            'full_description' => 'required',
            'image' => 'nullable|image|max:2048',
            'duration' => 'nullable|max:255',
            'level' => 'nullable|max:255',
            'price' => 'nullable|numeric',
            'features' => 'nullable',
            'solutions' => 'nullable',
            'pricing_packs' => 'nullable',
            'related_services' => 'nullable',
            'is_active' => 'boolean',
        ]);
        
        if ($request->hasFile('image')) {
            if ($training->image) {
                Storage::disk('public')->delete($training->image);
            }
            $validated['image'] = $request->file('image')->store('trainings', 'public');
        }
        
        $validated['features'] = $request->features ? explode("\n", $request->features) : [];
        $validated['solutions'] = $request->solutions ? json_decode($request->solutions, true) : [];
        $validated['pricing_packs'] = $request->pricing_packs ? json_decode($request->pricing_packs, true) : [];
        $validated['related_services'] = $request->related_services ? json_decode($request->related_services, true) : [];
        $validated['is_active'] = $request->has('is_active');
        
        $training->update($validated);
        
        return redirect()->route('admin.trainings.index')->with('success', 'Formation mise à jour avec succès');
    }

    public function destroy(Training $training)
    {
        if ($training->image) {
            Storage::disk('public')->delete($training->image);
        }
        
        $training->delete();
        
        return redirect()->route('admin.trainings.index')->with('success', 'Formation supprimée avec succès');
    }
}
