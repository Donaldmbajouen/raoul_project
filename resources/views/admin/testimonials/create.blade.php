@extends('admin.layouts.app')

@section('title', 'Nouveau témoignage')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Nouveau témoignage</h1>
</div>

<form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    
    <div class="bg-white rounded-lg shadow-sm p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Nom du client *</label>
                <input type="text" name="client_name" value="{{ old('client_name') }}" required
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Entreprise *</label>
                <input type="text" name="company" value="{{ old('company') }}" required
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Poste</label>
                <input type="text" name="position" value="{{ old('position') }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Note *</label>
                <select name="rating" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
                    <option value="5">5 étoiles</option>
                    <option value="4">4 étoiles</option>
                    <option value="3">3 étoiles</option>
                    <option value="2">2 étoiles</option>
                    <option value="1">1 étoile</option>
                </select>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Ordre d'affichage *</label>
                <input type="number" name="display_order" value="{{ old('display_order', 0) }}" required
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Couleur de fond *</label>
                <input type="color" name="background_color" value="{{ old('background_color', '#3B7BF8') }}" required
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 h-11">
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Photo</label>
                <input type="file" name="photo" accept="image/*"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Icône</label>
                <input type="file" name="icon" accept="image/*"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Témoignage *</label>
                <textarea name="testimonial" rows="5" required
                          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">{{ old('testimonial') }}</textarea>
            </div>
            
            <div>
                <label class="flex items-center">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}
                           class="rounded border-gray-300 text-[#3B7BF8] focus:ring-[#3B7BF8]">
                    <span class="ml-2 text-sm text-gray-700">Témoignage actif</span>
                </label>
            </div>
        </div>
    </div>
    
    <div class="flex justify-end space-x-4">
        <a href="{{ route('admin.testimonials.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
            Annuler
        </a>
        <button type="submit" class="px-6 py-2 bg-[#3B7BF8] text-white rounded-lg hover:bg-blue-600">
            Créer le témoignage
        </button>
    </div>
</form>
@endsection
