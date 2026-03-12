@extends('admin.layouts.app')

@section('title', 'Modifier la formation')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Modifier la formation</h1>
</div>

<form action="{{ route('admin.trainings.update', $training) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @method('PUT')
    
    <div class="bg-white rounded-lg shadow-sm p-6">
        <h2 class="text-lg font-semibold mb-4">Informations générales</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Titre *</label>
                <input type="text" name="title" value="{{ old('title', $training->title) }}" required
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Durée</label>
                <input type="text" name="duration" value="{{ old('duration', $training->duration) }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Niveau</label>
                <input type="text" name="level" value="{{ old('level', $training->level) }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Prix (FCFA)</label>
                <input type="number" name="price" value="{{ old('price', $training->price) }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div>
                <label class="flex items-center">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', $training->is_active) ? 'checked' : '' }}
                           class="rounded border-gray-300 text-[#3B7BF8] focus:ring-[#3B7BF8]">
                    <span class="ml-2 text-sm text-gray-700">Formation active</span>
                </label>
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Image principale</label>
                @if($training->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $training->image) }}" alt="" class="w-32 h-32 object-cover rounded">
                </div>
                @endif
                <input type="file" name="image" accept="image/*"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Description courte *</label>
                <textarea name="short_description" rows="3" required
                          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">{{ old('short_description', $training->short_description) }}</textarea>
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Description complète *</label>
                <textarea name="full_description" rows="8" required
                          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">{{ old('full_description', $training->full_description) }}</textarea>
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Features (une par ligne)</label>
                <textarea name="features" rows="4"
                          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">{{ old('features', is_array($training->features) ? implode("\n", $training->features) : '') }}</textarea>
            </div>
        </div>
    </div>
    
    <div class="flex justify-end space-x-4">
        <a href="{{ route('admin.trainings.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
            Annuler
        </a>
        <button type="submit" class="px-6 py-2 bg-[#3B7BF8] text-white rounded-lg hover:bg-blue-600">
            Mettre à jour
        </button>
    </div>
</form>
@endsection
