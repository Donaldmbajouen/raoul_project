@extends('admin.layouts.app')

@section('title', 'Modifier le service')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Modifier le service</h1>
</div>

<form action="{{ route('admin.services.update', $service) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @method('PUT')
    
    <div class="bg-white rounded-lg shadow-sm p-6">
        <h2 class="text-lg font-semibold mb-4">Informations générales</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Titre *</label>
                <input type="text" name="title" value="{{ old('title', $service->title) }}" required
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Catégorie *</label>
                <select name="category" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
                    <option value="SR" {{ $service->category == 'SR' ? 'selected' : '' }}>SR (Services Rapides)</option>
                    <option value="GL" {{ $service->category == 'GL' ? 'selected' : '' }}>GL (Gestion Longue)</option>
                </select>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Ordre d'affichage *</label>
                <input type="number" name="display_order" value="{{ old('display_order', $service->display_order) }}" required
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Prix de base (FCFA)</label>
                <input type="number" name="base_price" value="{{ old('base_price', $service->base_price) }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div>
                <label class="flex items-center">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', $service->is_active) ? 'checked' : '' }}
                           class="rounded border-gray-300 text-[#3B7BF8] focus:ring-[#3B7BF8]">
                    <span class="ml-2 text-sm text-gray-700">Service actif</span>
                </label>
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Image principale</label>
                @if($service->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $service->image) }}" alt="" class="w-32 h-32 object-cover rounded">
                </div>
                @endif
                <input type="file" name="image" accept="image/*"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Icône</label>
                @if($service->icon)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $service->icon) }}" alt="" class="w-16 h-16 object-cover rounded">
                </div>
                @endif
                <input type="file" name="icon" accept="image/*"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Description courte *</label>
                <textarea name="short_description" rows="3" required
                          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">{{ old('short_description', $service->short_description) }}</textarea>
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Description complète *</label>
                <textarea name="full_description" rows="8" required
                          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">{{ old('full_description', $service->full_description) }}</textarea>
            </div>
        </div>
    </div>
    
    <div class="flex justify-end space-x-4">
        <a href="{{ route('admin.services.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
            Annuler
        </a>
        <button type="submit" class="px-6 py-2 bg-[#3B7BF8] text-white rounded-lg hover:bg-blue-600">
            Mettre à jour
        </button>
    </div>
</form>
@endsection
