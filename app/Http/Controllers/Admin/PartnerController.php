<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::orderBy('order')->orderBy('name')->paginate(20);
        return view('admin.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.partners.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'required|max:255',
            'logo'      => 'nullable|image|max:2048',
            'link'      => 'nullable|url|max:255',
            'order'     => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('partners', 'public');
        }

        $validated['is_active'] = $request->has('is_active');
        $validated['order']     = $request->input('order', 0);

        Partner::create($validated);

        return redirect()->route('admin.partners.index')->with('success', 'Partenaire ajouté avec succès.');
    }

    public function edit(Partner $partner)
    {
        return view('admin.partners.edit', compact('partner'));
    }

    public function update(Request $request, Partner $partner)
    {
        $validated = $request->validate([
            'name'      => 'required|max:255',
            'logo'      => 'nullable|image|max:2048',
            'link'      => 'nullable|url|max:255',
            'order'     => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('logo')) {
            if ($partner->logo) Storage::disk('public')->delete($partner->logo);
            $validated['logo'] = $request->file('logo')->store('partners', 'public');
        }

        $validated['is_active'] = $request->has('is_active');
        $validated['order']     = $request->input('order', 0);

        $partner->update($validated);

        return redirect()->route('admin.partners.index')->with('success', 'Partenaire mis à jour.');
    }

    public function destroy(Partner $partner)
    {
        if ($partner->logo) Storage::disk('public')->delete($partner->logo);
        $partner->delete();

        return redirect()->route('admin.partners.index')->with('success', 'Partenaire supprimé.');
    }
}
