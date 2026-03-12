@extends('admin.layouts.app')

@section('title', 'Contacts')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Demandes de contact</h1>
</div>

<div class="bg-white rounded-lg shadow-sm p-4 mb-6">
    <form method="GET" class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <input type="text" name="search" placeholder="Rechercher..." value="{{ request('search') }}" 
               class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
        
        <select name="status" class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">
            <option value="">Tous les statuts</option>
            <option value="new" {{ request('status') == 'new' ? 'selected' : '' }}>Nouveau</option>
            <option value="in_progress" {{ request('status') == 'in_progress' ? 'selected' : '' }}>En cours</option>
            <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Traité</option>
            <option value="archived" {{ request('status') == 'archived' ? 'selected' : '' }}>Archivé</option>
        </select>
        
        <button type="submit" class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition">
            Filtrer
        </button>
    </form>
</div>

<div class="bg-white rounded-lg shadow-sm overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sujet</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse($contacts as $contact)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $contact->name }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $contact->email }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ Str::limit($contact->subject, 30) }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $contact->created_at->format('d/m/Y') }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                        @if($contact->status == 'new') bg-blue-100 text-blue-800
                        @elseif($contact->status == 'in_progress') bg-yellow-100 text-yellow-800
                        @elseif($contact->status == 'completed') bg-green-100 text-green-800
                        @else bg-gray-100 text-gray-800 @endif">
                        @if($contact->status == 'new') Nouveau
                        @elseif($contact->status == 'in_progress') En cours
                        @elseif($contact->status == 'completed') Traité
                        @else Archivé @endif
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="{{ route('admin.contacts.show', $contact) }}" class="text-[#3B7BF8] hover:text-blue-600 mr-3">Voir</a>
                    <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" class="inline">
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
                <td colspan="6" class="px-6 py-4 text-center text-gray-500">Aucune demande de contact trouvée</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-6">
    {{ $contacts->links() }}
</div>
@endsection
