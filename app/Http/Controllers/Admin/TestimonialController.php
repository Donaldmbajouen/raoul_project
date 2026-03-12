<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('display_order')->paginate(15);
        
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_name' => 'required|max:255',
            'company' => 'required|max:255',
            'position' => 'nullable|max:255',
            'testimonial' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'photo' => 'nullable|image|max:1024',
            'icon' => 'nullable|image|max:512',
            'background_color' => 'required|max:7',
            'display_order' => 'required|integer',
            'is_active' => 'boolean',
        ]);
        
        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('testimonials', 'public');
        }
        
        if ($request->hasFile('icon')) {
            $validated['icon'] = $request->file('icon')->store('testimonials/icons', 'public');
        }
        
        $validated['is_active'] = $request->has('is_active');
        
        Testimonial::create($validated);
        
        return redirect()->route('admin.testimonials.index')->with('success', 'Témoignage créé avec succès');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'client_name' => 'required|max:255',
            'company' => 'required|max:255',
            'position' => 'nullable|max:255',
            'testimonial' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'photo' => 'nullable|image|max:1024',
            'icon' => 'nullable|image|max:512',
            'background_color' => 'required|max:7',
            'display_order' => 'required|integer',
            'is_active' => 'boolean',
        ]);
        
        if ($request->hasFile('photo')) {
            if ($testimonial->photo) {
                Storage::disk('public')->delete($testimonial->photo);
            }
            $validated['photo'] = $request->file('photo')->store('testimonials', 'public');
        }
        
        if ($request->hasFile('icon')) {
            if ($testimonial->icon) {
                Storage::disk('public')->delete($testimonial->icon);
            }
            $validated['icon'] = $request->file('icon')->store('testimonials/icons', 'public');
        }
        
        $validated['is_active'] = $request->has('is_active');
        
        $testimonial->update($validated);
        
        return redirect()->route('admin.testimonials.index')->with('success', 'Témoignage mis à jour avec succès');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->photo) {
            Storage::disk('public')->delete($testimonial->photo);
        }
        
        if ($testimonial->icon) {
            Storage::disk('public')->delete($testimonial->icon);
        }
        
        $testimonial->delete();
        
        return redirect()->route('admin.testimonials.index')->with('success', 'Témoignage supprimé avec succès');
    }
}
