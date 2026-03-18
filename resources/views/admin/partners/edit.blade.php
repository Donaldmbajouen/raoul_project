@extends('admin.layouts.app')

@section('title', 'Modifier — ' . $partner->name)

@section('content')
<div class="flex items-center gap-3 mb-6">
    <a href="{{ route('admin.partners.index') }}" class="text-gray-400 hover:text-gray-600 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
    </a>
    <h1 class="text-2xl font-bold text-gray-900">Modifier — {{ $partner->name }}</h1>
</div>

<div class="max-w-xl bg-white rounded-xl shadow-sm border border-gray-200 p-6">
    <form action="{{ route('admin.partners.update', $partner) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf @method('PUT')
        @include('admin.partners._form')
        <div class="flex gap-3 pt-2">
            <button type="submit" class="bg-[#3B7BF8] text-white px-6 py-2 rounded-lg text-sm font-medium hover:bg-[#2563EB] transition">
                Mettre à jour
            </button>
            <a href="{{ route('admin.partners.index') }}" class="bg-gray-100 text-gray-700 px-6 py-2 rounded-lg text-sm font-medium hover:bg-gray-200 transition">
                Annuler
            </a>
        </div>
    </form>
</div>
@endsection
