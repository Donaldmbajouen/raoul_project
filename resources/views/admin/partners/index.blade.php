@extends('admin.layouts.app')

@section('title', 'Partenaires')

@section('content')
<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-900">Partenaires</h1>
        <p class="text-sm text-gray-500 mt-1">{{ $partners->total() }} partenaire(s)</p>
    </div>
    <a href="{{ route('admin.partners.create') }}"
       class="inline-flex items-center gap-2 bg-[#3B7BF8] text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-[#2563EB] transition">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
        </svg>
        Ajouter
    </a>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <table class="w-full text-sm">
        <thead class="bg-gray-50 border-b border-gray-200">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Logo</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Nom</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Lien</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Ordre</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Statut</th>
                <th class="px-6 py-3 text-right text-xs font-semibold text-gray-500 uppercase">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @forelse($partners as $partner)
            <tr class="hover:bg-gray-50 transition">
                <td class="px-6 py-4">
                    @if($partner->logo)
                        <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}"
                             class="h-10 w-20 object-contain rounded border border-gray-100 bg-gray-50 p-1">
                    @else
                        <div class="h-10 w-20 bg-gray-100 rounded flex items-center justify-center text-gray-400 text-xs">Aucun</div>
                    @endif
                </td>
                <td class="px-6 py-4 font-medium text-gray-900">{{ $partner->name }}</td>
                <td class="px-6 py-4 text-gray-500">
                    @if($partner->link)
                        <a href="{{ $partner->link }}" target="_blank" class="text-[#3B7BF8] hover:underline truncate max-w-xs block">{{ $partner->link }}</a>
                    @else
                        <span class="text-gray-300">—</span>
                    @endif
                </td>
                <td class="px-6 py-4 text-gray-500">{{ $partner->order }}</td>
                <td class="px-6 py-4">
                    @if($partner->is_active)
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Actif</span>
                    @else
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-600">Inactif</span>
                    @endif
                </td>
                <td class="px-6 py-4 text-right">
                    <div class="flex items-center justify-end gap-2">
                        <a href="{{ route('admin.partners.edit', $partner) }}"
                           class="text-gray-500 hover:text-[#3B7BF8] transition" title="Modifier">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </a>
                        <form action="{{ route('admin.partners.destroy', $partner) }}" method="POST"
                              onsubmit="return confirm('Supprimer ce partenaire ?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-gray-400 hover:text-red-500 transition" title="Supprimer">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="px-6 py-12 text-center text-gray-400">Aucun partenaire pour le moment.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    @if($partners->hasPages())
    <div class="px-6 py-4 border-t border-gray-100">{{ $partners->links() }}</div>
    @endif
</div>
@endsection
