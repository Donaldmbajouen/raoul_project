@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 mb-8">
    <!-- New Contacts -->
    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>
        </div>
        <p class="text-2xl font-bold text-gray-900">{{ $stats['new_contacts'] }}</p>
        <p class="text-sm text-gray-500 mt-1">Nouveaux contacts</p>
    </div>
    
    <!-- Published Articles -->
    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                </svg>
            </div>
        </div>
        <p class="text-2xl font-bold text-gray-900">{{ $stats['published_articles'] }}</p>
        <p class="text-sm text-gray-500 mt-1">Articles publiés</p>
    </div>
    
    <!-- Active Projects -->
    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
            </div>
        </div>
        <p class="text-2xl font-bold text-gray-900">{{ $stats['active_projects'] }}</p>
        <p class="text-sm text-gray-500 mt-1">Projets actifs</p>
    </div>
    
    <!-- Active Services -->
    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>
        </div>
        <p class="text-2xl font-bold text-gray-900">{{ $stats['active_services'] }}</p>
        <p class="text-sm text-gray-500 mt-1">Services actifs</p>
    </div>
    
    <!-- Active Trainings -->
    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
        <div class="flex items-center justify-between mb-4">
            <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
            </div>
        </div>
        <p class="text-2xl font-bold text-gray-900">{{ $stats['active_trainings'] }}</p>
        <p class="text-sm text-gray-500 mt-1">Formations actives</p>
    </div>
</div>

<!-- Recent Activity -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
    <!-- Recent Contacts -->
    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
        <h3 class="text-lg font-bold text-gray-900 mb-4">Derniers contacts</h3>
        <div class="space-y-3">
            @forelse($recent_contacts as $contact)
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <div class="flex-1">
                    <p class="text-sm font-medium text-gray-900">{{ $contact->name }}</p>
                    <p class="text-xs text-gray-500">{{ $contact->email }}</p>
                </div>
                <a href="{{ route('admin.contacts.show', $contact) }}" class="text-[#3B7BF8] hover:text-blue-600 text-sm">
                    Voir
                </a>
            </div>
            @empty
            <p class="text-sm text-gray-500 text-center py-8">Aucun contact récent</p>
            @endforelse
        </div>
    </div>
    
    <!-- Recent Articles -->
    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100">
        <h3 class="text-lg font-bold text-gray-900 mb-4">Derniers articles</h3>
        <div class="space-y-3">
            @forelse($recent_blogs as $blog)
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                <div class="flex-1">
                    <p class="text-sm font-medium text-gray-900">{{ Str::limit($blog->title, 40) }}</p>
                    <p class="text-xs text-gray-500">{{ $blog->created_at->format('d/m/Y') }}</p>
                </div>
                <a href="{{ route('admin.blogs.edit', $blog) }}" class="text-[#3B7BF8] hover:text-blue-600 text-sm">
                    Modifier
                </a>
            </div>
            @empty
            <p class="text-sm text-gray-500 text-center py-8">Aucun article récent</p>
            @endforelse
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 mb-8">
    <h3 class="text-lg font-bold text-gray-900 mb-4">Actions rapides</h3>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <a href="{{ route('admin.blogs.create') }}" class="flex items-center gap-3 p-4 border border-gray-200 rounded-lg hover:border-[#3B7BF8] hover:bg-blue-50 transition-all group">
            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center group-hover:bg-[#3B7BF8] transition-all">
                <svg class="w-5 h-5 text-[#3B7BF8] group-hover:text-white transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
            <span class="text-sm font-medium text-gray-700 group-hover:text-[#3B7BF8]">Nouvel article</span>
        </a>
        
        <a href="{{ route('admin.projects.create') }}" class="flex items-center gap-3 p-4 border border-gray-200 rounded-lg hover:border-[#3B7BF8] hover:bg-blue-50 transition-all group">
            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center group-hover:bg-[#3B7BF8] transition-all">
                <svg class="w-5 h-5 text-[#3B7BF8] group-hover:text-white transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
            </div>
            <span class="text-sm font-medium text-gray-700 group-hover:text-[#3B7BF8]">Nouveau projet</span>
        </a>
        
        <a href="{{ route('admin.contacts.index') }}" class="flex items-center gap-3 p-4 border border-gray-200 rounded-lg hover:border-[#3B7BF8] hover:bg-blue-50 transition-all group">
            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center group-hover:bg-[#3B7BF8] transition-all">
                <svg class="w-5 h-5 text-[#3B7BF8] group-hover:text-white transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>
            <span class="text-sm font-medium text-gray-700 group-hover:text-[#3B7BF8]">Voir contacts</span>
        </a>
        
        <a href="{{ route('admin.services.index') }}" class="flex items-center gap-3 p-4 border border-gray-200 rounded-lg hover:border-[#3B7BF8] hover:bg-blue-50 transition-all group">
            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center group-hover:bg-[#3B7BF8] transition-all">
                <svg class="w-5 h-5 text-[#3B7BF8] group-hover:text-white transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>
            <span class="text-sm font-medium text-gray-700 group-hover:text-[#3B7BF8]">Gérer services</span>
        </a>
    </div>
</div>

<!-- Welcome Message -->
<div class="bg-gradient-to-r from-[#3B7BF8] to-[#2563EB] rounded-xl shadow-lg p-8 text-white">
    <h2 class="text-2xl font-bold mb-2">Bienvenue sur votre dashboard! 👋</h2>
    <p class="text-blue-100 mb-4">Gérez facilement tout le contenu de votre site depuis cette interface.</p>
    <a href="{{ route('home') }}" target="_blank" class="inline-flex items-center gap-2 bg-white text-[#3B7BF8] font-semibold px-6 py-3 rounded-lg hover:bg-blue-50 transition-all">
        <span>Voir le site</span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
        </svg>
    </a>
</div>
@endsection
