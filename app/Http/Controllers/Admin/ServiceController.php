<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $query = Service::orderBy('display_order');
        
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }
        
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }
        
        $services = $query->paginate(15);
        
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'category' => 'required|in:SR,GL',
            'short_description' => 'required',
            'full_description' => 'required',
            'image' => 'required|image|max:2048',
            'icon' => 'nullable|image|max:1024',
            'base_price' => 'nullable|numeric',
            'display_order' => 'required|integer',
            'advantages' => 'nullable',
            'process' => 'nullable',
            'faq' => 'nullable',
            'is_active' => 'boolean',
        ]);
        
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('services', 'public');
        }
        
        if ($request->hasFile('icon')) {
            $validated['icon'] = $request->file('icon')->store('services/icons', 'public');
        }
        
        $validated['advantages'] = $request->advantages ? json_decode($request->advantages, true) : [];
        $validated['process'] = $request->process ? json_decode($request->process, true) : [];
        $validated['faq'] = $request->faq ? json_decode($request->faq, true) : [];
        $validated['is_active'] = $request->has('is_active');
        
        Service::create($validated);
        
        return redirect()->route('admin.services.index')->with('success', 'Service créé avec succès');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'category' => 'required|in:SR,GL',
            'short_description' => 'required',
            'full_description' => 'required',
            'image' => 'nullable|image|max:2048',
            'icon' => 'nullable|image|max:1024',
            'base_price' => 'nullable|numeric',
            'display_order' => 'required|integer',
            'advantages' => 'nullable',
            'process' => 'nullable',
            'faq' => 'nullable',
            'is_active' => 'boolean',
        ]);
        
        if ($request->hasFile('image')) {
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }
            $validated['image'] = $request->file('image')->store('services', 'public');
        }
        
        if ($request->hasFile('icon')) {
            if ($service->icon) {
                Storage::disk('public')->delete($service->icon);
            }
            $validated['icon'] = $request->file('icon')->store('services/icons', 'public');
        }
        
        $validated['advantages'] = $request->advantages ? json_decode($request->advantages, true) : [];
        $validated['process'] = $request->process ? json_decode($request->process, true) : [];
        $validated['faq'] = $request->faq ? json_decode($request->faq, true) : [];
        $validated['is_active'] = $request->has('is_active');
        
        $service->update($validated);
        
        return redirect()->route('admin.services.index')->with('success', 'Service mis à jour avec succès');
    }

    public function destroy(Service $service)
    {
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }
        
        if ($service->icon) {
            Storage::disk('public')->delete($service->icon);
        }
        
        $service->delete();
        
        return redirect()->route('admin.services.index')->with('success', 'Service supprimé avec succès');
    }
}
