@extends('layouts.app')

@section('title', $project->title)

@section('content')
<!-- Hero Section -->
<section class="relative py-20 lg:py-32 bg-gradient-to-br from-gray-50 to-white overflow-hidden">
    <!-- Subtle Grid Pattern Background -->
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: repeating-linear-gradient(0deg, #000 0px, #000 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #000 0px, #000 1px, transparent 1px, transparent 40px);"></div>
    
    <!-- Decorative Elements -->
    <div class="absolute top-20 right-10 w-32 h-32 bg-blue-200 rounded-2xl opacity-50"></div>
    <div class="absolute top-40 right-32 w-24 h-24 bg-blue-300 rounded-2xl opacity-30"></div>
    <div class="absolute bottom-20 right-20 w-40 h-40 bg-blue-200 rounded-2xl opacity-40"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto">
            <!-- Title -->
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-display font-extrabold text-gray-900 mb-6" data-aos="fade-up">
                {{ $project->title }}
            </h1>
            
            <!-- Breadcrumb -->
            <div class="flex items-center justify-center gap-2 text-sm" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('home') }}" class="text-[#3B7BF8] hover:underline">
                    Accueil
                </a>
                <span class="text-gray-400">/</span>
                <a href="{{ route('realizations') }}" class="text-[#3B7BF8] hover:underline">
                    Réalisations
                </a>
                <span class="text-gray-400">/</span>
                <span class="text-gray-600">{{ $project->title }}</span>
            </div>
        </div>
    </div>
</section>

<!-- Project Hero Image -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative h-[40vh] lg:h-[50vh] overflow-hidden rounded-3xl shadow-2xl" data-aos="fade-up">
            @if($project->hero_image)
                <img src="{{ asset('storage/' . $project->hero_image) }}"
                     alt="{{ $project->title }}"
                     class="w-full h-full object-cover">
            @else
                <div class="w-full h-full bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center">
                    <svg class="w-24 h-24 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
            @endif
            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
        </div>
    </div>
</section>

<!-- Project Info Section -->
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Sidebar - Project Meta -->
            <div class="lg:col-span-1">
                <div class="bg-gray-50 rounded-3xl p-8 sticky top-8">
                    <!-- Date -->
                    <div class="mb-8 text-center" data-aos="fade-up">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-white rounded-2xl shadow-md mb-4">
                            <svg class="w-10 h-10 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div class="text-xs text-gray-500 uppercase tracking-wider mb-1">Date</div>
                        <div class="text-base font-bold text-gray-900">{{ $project->project_date ? $project->project_date->format('d F Y') : '—' }}</div>
                    </div>
                    
                    <!-- Client -->
                    <div class="mb-8 text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-white rounded-2xl shadow-md mb-4">
                            <svg class="w-10 h-10 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <div class="text-xs text-gray-500 uppercase tracking-wider mb-1">Client</div>
                        <div class="text-base font-bold text-gray-900">{{ $project->client ?? '—' }}</div>
                    </div>
                    
                    <!-- Domain -->
                    <div class="mb-8 text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-white rounded-2xl shadow-md mb-4">
                            <svg class="w-10 h-10 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                            </svg>
                        </div>
                        <div class="text-xs text-gray-500 uppercase tracking-wider mb-1">Domaine</div>
                        <div class="text-base font-bold text-gray-900">{{ $project->domain ?? '—' }}</div>
                    </div>
                    
                    <!-- Location -->
                    <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-white rounded-2xl shadow-md mb-4">
                            <svg class="w-10 h-10 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div class="text-xs text-gray-500 uppercase tracking-wider mb-1">Location</div>
                        <div class="text-base font-bold text-gray-900">{{ $project->location ?? '—' }}</div>
                    </div>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <!-- Contexte -->
                <div class="mb-12" data-aos="fade-up">
                    <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 mb-6">
                        Contexte
                    </h2>
                    <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed">
                        {!! $project->context !!}
                    </div>
                </div>
                
                <!-- Résumé Du Projet -->
                <div class="mb-12" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 mb-6">
                        Résumé Du Projet :
                    </h2>
                    <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed mb-6">
                        {!! $project->summary !!}
                    </div>
                    
                    <!-- Le système permet -->
                    @if($project->features && count($project->features) > 0)
                    <div class="bg-blue-50 rounded-2xl p-8">
                        <h3 class="text-xl font-display font-bold text-gray-900 mb-4">
                            Le système permet :
                        </h3>
                        <ul class="space-y-3">
                            @foreach($project->features as $feature)
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-[#3B7BF8] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span class="text-gray-700">{{ $feature }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                
                <!-- Bénéfices obtenus -->
                @if($project->benefits && count($project->benefits) > 0)
                <div class="mb-12" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 mb-6">
                        Bénéfices obtenus :
                    </h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach($project->benefits as $benefit)
                        <div class="flex items-center gap-3 bg-white rounded-xl p-4 shadow-sm border border-gray-100">
                            @if(is_array($benefit))
                                <span class="text-2xl">{{ $benefit['icon'] ?? '✓' }}</span>
                                <span class="text-gray-700 font-medium text-sm">{{ $benefit['text'] ?? $benefit }}</span>
                            @else
                                <svg class="w-5 h-5 text-[#3B7BF8] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-700 font-medium text-sm">{{ $benefit }}</span>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                
                <!-- Pour qui -->
                @if($project->target_audience && count($project->target_audience) > 0)
                <div data-aos="fade-up" data-aos-delay="300">
                    <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 mb-6">
                        Pour qui cette automatisation est idéale ?
                    </h2>
                    <ul class="space-y-3">
                        @foreach($project->target_audience as $audience)
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-[#3B7BF8] flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                            <span class="text-gray-700">{{ $audience }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
@if($project->gallery && count($project->gallery) > 0)
<section class="py-20 lg:py-28 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 mb-12 text-center" data-aos="fade-up">
            Galerie du Projet
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($project->gallery as $index => $image)
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer"
                 data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <img src="{{ asset('storage/' . $image) }}"
                     alt="Galerie image {{ $index + 1 }}"
                     class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <span class="text-white font-semibold">Image {{ $index + 1 }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 mb-6" data-aos="fade-up">
            Intéressé par un projet similaire ?
        </h2>
        <p class="text-gray-600 text-lg mb-10" data-aos="fade-up" data-aos-delay="100">
            Discutons de vos besoins et créons ensemble une solution sur mesure
        </p>
        <div class="flex flex-wrap items-center justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-[#3B7BF8] text-white text-base font-semibold px-10 py-5 rounded-full hover:bg-[#2563EB] hover:-translate-y-1 transition-all shadow-xl">
                Démarrer un projet →
            </a>
            <a href="{{ route('realizations') }}" class="inline-flex items-center gap-2 bg-gray-100 text-gray-900 text-base font-semibold px-10 py-5 rounded-full hover:bg-gray-200 transition-all">
                ← Voir tous les projets
            </a>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        easing: 'ease-out',
        once: true,
        offset: 100
    });
</script>
@endpush
