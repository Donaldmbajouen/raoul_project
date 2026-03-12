@extends('admin.layouts.app')

@section('title', 'Nouvel article')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Nouvel article</h1>
</div>

<form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    
    <div class="bg-white rounded-lg shadow-sm p-6">
        <h2 class="text-lg font-semibold mb-4">Informations générales</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Titre *</label>
                <input type="text" name="title" value="{{ old('title') }}" required
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
                @error('title')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Catégorie *</label>
                <input type="text" name="category" value="{{ old('category') }}" required
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
                @error('category')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Tags (séparés par virgule)</label>
                <input type="text" name="tags" value="{{ old('tags') }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
                @error('tags')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Date de publication *</label>
                <input type="date" name="published_at" value="{{ old('published_at', date('Y-m-d')) }}" required
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
                @error('published_at')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Statut *</label>
                <select name="status" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
                    <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Brouillon</option>
                    <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Publié</option>
                </select>
                @error('status')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Image principale *</label>
                <input type="file" name="image" accept="image/*" required
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
                @error('image')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Extrait</label>
                <textarea name="excerpt" rows="3"
                          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">{{ old('excerpt') }}</textarea>
                @error('excerpt')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
            </div>
            
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Contenu *</label>
                <textarea name="content" rows="10" required
                          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">{{ old('content') }}</textarea>
                @error('content')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-lg shadow-sm p-6">
        <h2 class="text-lg font-semibold mb-4">SEO</h2>
        
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Meta Title</label>
                <input type="text" name="meta_title" value="{{ old('meta_title') }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Meta Description</label>
                <textarea name="meta_description" rows="2"
                          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">{{ old('meta_description') }}</textarea>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Meta Keywords</label>
                <input type="text" name="meta_keywords" value="{{ old('meta_keywords') }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            </div>
        </div>
    </div>
    
    <div class="flex justify-end space-x-4">
        <a href="{{ route('admin.blogs.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
            Annuler
        </a>
        <button type="submit" class="px-6 py-2 bg-[#3B7BF8] text-white rounded-lg hover:bg-blue-600">
            Créer l'article
        </button>
    </div>
</form>
@endsection
