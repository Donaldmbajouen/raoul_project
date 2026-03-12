@extends('admin.layouts.app')

@section('title', 'Détails du contact')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <h1 class="text-2xl font-bold text-gray-900">Détails du contact</h1>
    <a href="{{ route('admin.contacts.index') }}" class="text-gray-600 hover:text-gray-900">
        ← Retour à la liste
    </a>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="lg:col-span-2 space-y-6">
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h2 class="text-lg font-semibold mb-4">Message</h2>
            <div class="space-y-3">
                <div>
                    <span class="text-sm font-medium text-gray-500">Sujet:</span>
                    <p class="text-gray-900">{{ $contact->subject }}</p>
                </div>
                <div>
                    <span class="text-sm font-medium text-gray-500">Message:</span>
                    <p class="text-gray-900 whitespace-pre-wrap">{{ $contact->message }}</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h2 class="text-lg font-semibold mb-4">Notes internes</h2>
            <form action="{{ route('admin.contacts.update', $contact) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="status" value="{{ $contact->status }}">
                <textarea name="notes" rows="4" 
                          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent">{{ $contact->notes }}</textarea>
                <button type="submit" class="mt-3 bg-[#3B7BF8] text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                    Enregistrer les notes
                </button>
            </form>
        </div>
    </div>
    
    <div class="space-y-6">
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h2 class="text-lg font-semibold mb-4">Informations</h2>
            <div class="space-y-3">
                <div>
                    <span class="text-sm font-medium text-gray-500">Nom:</span>
                    <p class="text-gray-900">{{ $contact->name }}</p>
                </div>
                <div>
                    <span class="text-sm font-medium text-gray-500">Email:</span>
                    <p class="text-gray-900">
                        <a href="mailto:{{ $contact->email }}" class="text-[#3B7BF8] hover:underline">
                            {{ $contact->email }}
                        </a>
                    </p>
                </div>
                <div>
                    <span class="text-sm font-medium text-gray-500">Téléphone:</span>
                    <p class="text-gray-900">{{ $contact->phone ?? 'N/A' }}</p>
                </div>
                <div>
                    <span class="text-sm font-medium text-gray-500">Date:</span>
                    <p class="text-gray-900">{{ $contact->created_at->format('d/m/Y à H:i') }}</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h2 class="text-lg font-semibold mb-4">Statut</h2>
            <form action="{{ route('admin.contacts.update', $contact) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="notes" value="{{ $contact->notes }}">
                <select name="status" 
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent mb-3">
                    <option value="new" {{ $contact->status == 'new' ? 'selected' : '' }}>Nouveau</option>
                    <option value="in_progress" {{ $contact->status == 'in_progress' ? 'selected' : '' }}>En cours</option>
                    <option value="completed" {{ $contact->status == 'completed' ? 'selected' : '' }}>Traité</option>
                    <option value="archived" {{ $contact->status == 'archived' ? 'selected' : '' }}>Archivé</option>
                </select>
                <button type="submit" class="w-full bg-[#3B7BF8] text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                    Mettre à jour le statut
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
