@extends('admin.layouts.app')

@section('title', 'Modifier le projet')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Modifier le projet</h1>
</div>

<form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @method('PUT')
    
    <div class="bg-white rounded-lg shadow-sm p-6">
        <h2 class="text-lg font-semibold mb-4">Informations générales</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Titre *</label>
                <input type="text" name="title" value="{{ old('title', $project->title) }}" required
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Client</label>
                <input type="text" name="client" value="{{ old('client', $project->client) }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Date du projet *</label>
                <input type="date" name="project_date" value="{{ old('project_date', $project->project_date->format('Y-m-d')) }}" required
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Localisation</label>
                <input type="text" name="location" value="{{ old('location', $project->location) }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Domaine/URL</label>
                <input type="text" name="domain" value="{{ old('domain', $project->domain) }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Catégorie *</label>
                <select name="category" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
                    <option value="Automatisation & Agent IA" {{ $project->category == 'Automatisation & Agent IA' ? 'selected' : '' }}>Automatisation & Agent IA</option>
                    <option value="Conception Graphique" {{ $project->category == 'Conception Graphique' ? 'selected' : '' }}>Conception Graphique</option>
                    <option value="Création De Site Web" {{ $project->category == 'Création De Site Web' ? 'selected' : '' }}>Création De Site Web</option>
                    <option value="Marketing Digital" {{ $project->category == 'Marketing Digital' ? 'selected' : '' }}>Marketing Digital</option>
                </select>
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Image hero</label>
                @if($project->hero_image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $project->hero_image) }}" alt="" class="w-32 h-32 object-cover rounded">
                </div>
                @endif
                <input type="file" name="hero_image" accept="image/*"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Description courte *</label>
                <textarea name="short_description" rows="2" required
                          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">{{ old('short_description', $project->short_description) }}</textarea>
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Contexte *</label>
                <textarea name="context" rows="5" required
                          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">{{ old('context', $project->context) }}</textarea>
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Résumé *</label>
                <textarea name="summary" rows="5" required
                          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">{{ old('summary', $project->summary) }}</textarea>
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Features (une par ligne)</label>
                <textarea name="features" rows="4"
                          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">{{ old('features', is_array($project->features) ? implode("\n", $project->features) : '') }}</textarea>
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Public cible (une par ligne)</label>
                <textarea name="target_audience" rows="4"
                          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">{{ old('target_audience', is_array($project->target_audience) ? implode("\n", $project->target_audience) : '') }}</textarea>
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Galerie actuelle</label>
                @if($project->gallery && count($project->gallery) > 0)
                <div class="grid grid-cols-4 gap-2 mb-2">
                    @foreach($project->gallery as $image)
                    <img src="{{ asset('storage/' . $image) }}" alt="" class="w-full h-24 object-cover rounded">
                    @endforeach
                </div>
                @endif
                <label class="block text-sm font-medium text-gray-700 mb-2">Ajouter des images</label>
                <input type="file" name="gallery[]" accept="image/*" multiple
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div>
                <label class="flex items-center">
                    <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $project->is_featured) ? 'checked' : '' }}
                           class="rounded border-gray-300 text-[#3B7BF8] focus:ring-[#3B7BF8]">
                    <span class="ml-2 text-sm text-gray-700">Projet en vedette</span>
                </label>
            </div>
            
            <div>
                <label class="flex items-center">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', $project->is_active) ? 'checked' : '' }}
                           class="rounded border-gray-300 text-[#3B7BF8] focus:ring-[#3B7BF8]">
                    <span class="ml-2 text-sm text-gray-700">Projet actif</span>
                </label>
            </div>
        </div>
    </div>
    
    <div class="flex justify-end space-x-4">
        <a href="{{ route('admin.projects.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
            Annuler
        </a>
        <button type="submit" class="px-6 py-2 bg-[#3B7BF8] text-white rounded-lg hover:bg-blue-600">
            Mettre à jour
        </button>
    </div>
</form>
@endsection
