@extends('layouts.app')

@section('title', __('training.title'))

@section('content')
<!-- Hero Section -->
<section class="relative py-20 lg:py-32 bg-gradient-to-br from-gray-50 to-white overflow-hidden">
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: repeating-linear-gradient(0deg, #000 0px, #000 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #000 0px, #000 1px, transparent 1px, transparent 40px);"></div>
    <div class="absolute top-20 right-10 w-32 h-32 bg-gray-200 rounded-2xl opacity-50"></div>
    <div class="absolute top-40 right-32 w-24 h-24 bg-gray-300 rounded-2xl opacity-30"></div>
    <div class="absolute bottom-20 right-20 w-40 h-40 bg-gray-200 rounded-2xl opacity-40"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-200 rounded-full px-4 py-2 text-sm font-semibold text-[#3B7BF8] mb-8" data-aos="fade-up">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
                {{ __('training.hero.badge') }}
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-display font-extrabold text-gray-900 mb-6 leading-tight" data-aos="fade-up" data-aos-delay="100">
                {{ __('training.hero.title') }}
            </h1>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                {{ __('training.hero.description') }}
            </p>
        </div>
    </div>
</section>

<!-- Training Cards Section -->
<section class="py-20 lg:py-28 bg-white relative">
    <div class="absolute inset-0 opacity-[0.02]" style="background-image: repeating-linear-gradient(0deg, #000 0px, #000 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #000 0px, #000 1px, transparent 1px, transparent 40px);"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($trainings as $training)
            <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 flex flex-col"
                 data-aos="fade-up" data-aos-delay="{{ ($loop->index % 3) * 100 }}">
                <!-- Image -->
                <div class="relative h-56 overflow-hidden">
                    @if($training->image)
                        <img src="{{ asset('storage/' . $training->image) }}" alt="{{ $training->title }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center">
                            <svg class="w-16 h-16 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>

                    {{-- Méta durée / niveau --}}
                    <div class="absolute bottom-4 left-4 flex gap-2">
                        @if($training->duration)
                        <span class="bg-white/90 text-gray-800 text-xs font-semibold px-3 py-1 rounded-full">
                            {{ $training->duration }}
                        </span>
                        @endif
                        @if($training->level)
                        <span class="bg-[#3B7BF8]/90 text-white text-xs font-semibold px-3 py-1 rounded-full">
                            {{ $training->level }}
                        </span>
                        @endif
                    </div>
                </div>

                <!-- Content -->
                <div class="p-6 flex flex-col flex-1">
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-[#3B7BF8] transition-colors">
                        {{ $training->title }}
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4 flex-1">
                        {{ Str::limit($training->short_description, 120) }}
                    </p>

                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-gray-100">
                        @if($training->price)
                        <span class="text-[#3B7BF8] font-bold text-lg">
                            {{ number_format($training->price, 0, ',', ' ') }} FCFA
                        </span>
                        @endif
                        <a href="{{ route('training.show', $training->slug) }}"
                           class="inline-flex items-center gap-2 text-[#3B7BF8] font-semibold text-sm group-hover:gap-3 transition-all">
                            Voir la formation
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-20 text-gray-400">
                <p class="text-lg">Aucune formation disponible pour le moment.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<x-why-choose-us />
<x-partners-section />
@endsection

@push('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init({ duration: 800, easing: 'ease-out', once: true, offset: 100 });</script>
@endpush
