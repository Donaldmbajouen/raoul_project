@extends('layouts.app')

@section('title', $training->title)

@section('content')
<!-- Hero Section -->
<section class="relative py-20 lg:py-32 bg-gradient-to-br from-gray-50 to-white overflow-hidden">
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: repeating-linear-gradient(0deg, #000 0px, #000 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #000 0px, #000 1px, transparent 1px, transparent 40px);"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto">
            <div class="flex items-center justify-center gap-2 text-sm mb-8" data-aos="fade-up">
                <a href="{{ route('home') }}" class="text-[#3B7BF8] hover:underline">Accueil</a>
                <span class="text-gray-400">/</span>
                <a href="{{ route('training') }}" class="text-[#3B7BF8] hover:underline">Formations</a>
                <span class="text-gray-400">/</span>
                <span class="text-gray-600">{{ $training->title }}</span>
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-display font-extrabold text-gray-900 mb-6" data-aos="fade-up" data-aos-delay="100">
                {{ $training->title }}
            </h1>
            {{-- Méta badges --}}
            <div class="flex flex-wrap items-center justify-center gap-3 mt-4" data-aos="fade-up" data-aos-delay="200">
                @if($training->duration)
                <span class="inline-flex items-center gap-1.5 bg-blue-50 text-[#3B7BF8] text-sm font-semibold px-4 py-2 rounded-full">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    {{ $training->duration }}
                </span>
                @endif
                @if($training->level)
                <span class="inline-flex items-center gap-1.5 bg-green-50 text-green-700 text-sm font-semibold px-4 py-2 rounded-full">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                    {{ $training->level }}
                </span>
                @endif
                @if($training->price)
                <span class="inline-flex items-center gap-1.5 bg-yellow-50 text-yellow-700 text-sm font-semibold px-4 py-2 rounded-full">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    {{ number_format($training->price, 0, ',', ' ') }} FCFA
                </span>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-20 lg:py-28 bg-white relative">
    <div class="absolute inset-0 opacity-[0.02]" style="background-image: repeating-linear-gradient(0deg, #000 0px, #000 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #000 0px, #000 1px, transparent 1px, transparent 40px);"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
            <!-- Image -->
            <div data-aos="fade-right">
                <div class="rounded-2xl overflow-hidden shadow-2xl sticky top-8">
                    @if($training->image)
                        <img src="{{ asset('storage/' . $training->image) }}" alt="{{ $training->title }}"
                             class="w-full h-[500px] object-cover">
                    @else
                        <div class="w-full h-[500px] bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center">
                            <svg class="w-24 h-24 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Content -->
            <div data-aos="fade-left">
                <div class="inline-flex items-center gap-2 bg-blue-50 rounded-full px-4 py-2 text-sm font-semibold text-[#3B7BF8] mb-6">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                    À propos de cette formation
                </div>

                <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed mb-8">
                    {!! $training->full_description !!}
                </div>

                @if($training->features && count($training->features) > 0)
                <h3 class="text-xl font-bold text-gray-900 mb-4">Ce que vous apprendrez :</h3>
                <ul class="space-y-3 mb-8">
                    @foreach($training->features as $feature)
                    <li class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mt-0.5">
                            <svg class="w-3.5 h-3.5 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-gray-700">{{ $feature }}</span>
                    </li>
                    @endforeach
                </ul>
                @endif

                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 bg-[#3B7BF8] text-white text-base font-semibold px-8 py-4 rounded-full hover:bg-[#2563EB] hover:-translate-y-0.5 transition-all shadow-lg shadow-blue-500/30">
                    S'inscrire à cette formation →
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Solutions --}}
@if($training->solutions && count($training->solutions) > 0)
<section class="py-20 lg:py-28 bg-gray-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 bg-blue-50 rounded-full px-4 py-2 text-sm font-semibold text-[#3B7BF8] mb-4">
                Ce que vous obtenez
            </div>
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900">
                Les bénéfices de cette formation
            </h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($training->solutions as $index => $solution)
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $solution['title'] ?? '' }}</h3>
                <p class="text-gray-600 text-sm leading-relaxed">{{ $solution['description'] ?? '' }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- Pricing packs --}}
@if($training->pricing_packs && count($training->pricing_packs) > 0)
<section class="py-20 lg:py-28 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 bg-blue-50 rounded-full px-4 py-2 text-sm font-semibold text-[#3B7BF8] mb-4">
                Nos offres
            </div>
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900">
                Choisissez votre pack
            </h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-{{ min(count($training->pricing_packs), 3) }} gap-8 justify-center">
            @foreach($training->pricing_packs as $index => $pack)
            @php $isFeatured = $index === 1; @endphp
            <div class="rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all {{ $isFeatured ? 'bg-gradient-to-br from-[#3B7BF8] to-[#2563EB] text-white transform scale-105' : 'bg-white' }}"
                 data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <h3 class="text-2xl font-bold mb-6 {{ $isFeatured ? 'text-white' : 'text-gray-900' }}">
                    {{ $pack['title'] ?? 'Pack ' . ($index + 1) }}
                </h3>
                @if(!empty($pack['features']))
                <ul class="space-y-3 mb-8">
                    @foreach($pack['features'] as $feat)
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 flex-shrink-0 mt-0.5 {{ $isFeatured ? 'text-white' : 'text-[#3B7BF8]' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-sm {{ $isFeatured ? 'text-white/90' : 'text-gray-600' }}">{{ $feat }}</span>
                    </li>
                    @endforeach
                </ul>
                @endif
                <a href="{{ route('contact') }}"
                   class="block text-center font-semibold px-6 py-3 rounded-full transition-all hover:scale-105 {{ $isFeatured ? 'bg-white text-[#3B7BF8]' : 'bg-[#3B7BF8] text-white' }}">
                    Choisir ce pack
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<x-why-choose-us />
<x-partners-section />
@endsection

@push('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init({ duration: 800, easing: 'ease-out', once: true, offset: 100 });</script>
@endpush
