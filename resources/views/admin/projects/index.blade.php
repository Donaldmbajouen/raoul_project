@extends('admin.layouts.app')

@section('title', 'Projets')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <h1 class="text-2xl font-bold text-gray-900">Projets</h1>
    <a href="{{ route('admin.projects.create') }}" class="bg-[#3B7BF8] text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
        Nouveau projet
    </a>
</div>

<!-- Filters -->
<div class="bg-white rounded-lg shadow-sm p-4 mb-6">
    <form method="GET" class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <input type="text" name="search" placeholder="Rechercher..." value="{{ request('search') }}" 
               class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
        
        <select name="category" class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            <option value="">Toutes les catégories</option>
            <option value="Automatisation & Agent IA" {{ request('category') == 'Automatisation & Agent IA' ? 'selected' : '' }}>Automatisation & Agent IA</option>
            <option value="Conception Graphique" {{ request('category') == 'Conception Graphique' ? 'selected' : '' }}>Conception Graphique</option>
            <option value="Création De Site Web" {{ request('category') == 'Création De Site Web' ? 'selected' : '' }}>Création De Site Web</option>
            <option value="Marketing Digital" {{ request('category') == 'Marketing Digital' ? 'selected' : '' }}>Marketing Digital</option>
        </select>
        
        <button type="submit" class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition">
            Filtrer
        </button>
    </form>
</div>

<!-- Table -->
<div class="bg-white rounded-lg shadow-sm overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Projet</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Catégorie</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse($projects as $project)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                        @if($project->hero_image)
                        <img src="{{ asset('storage/' . $project->hero_image) }}" alt="" class="w-10 h-10 rounded object-cover mr-3">
                        @endif
                        <div>
                            <div class="text-sm font-medium text-gray-900">{{ $project->title }}</div>
                            @if($project->is_featured)
                            <span class="text-xs text-yellow-600">★ En vedette</span>
                            @endif
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $project->client ?? 'N/A' }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $project->category }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{ $project->project_date->format('d/m/Y') }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                        {{ $project->is_active ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                        {{ $project->is_active ? 'Actif' : 'Inactif' }}
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="{{ route('admin.projects.edit', $project) }}" class="text-[#3B7BF8] hover:text-blue-600 mr-3">Modifier</a>
                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Êtes-vous sûr ?')" class="text-red-600 hover:text-red-900">
                            Supprimer
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="px-6 py-4 text-center text-gray-500">Aucun projet trouvé</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- Pagination -->
<div class="mt-6">
    {{ $projects->links() }}
</div>
@endsection
