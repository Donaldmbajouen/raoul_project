@extends('layouts.app')

@section('title', __('programs.title'))

@section('content')
<!-- Hero Section -->
<section class="relative py-20 lg:py-32 bg-gradient-to-br from-gray-50 to-white overflow-hidden">
    <!-- Subtle Grid Pattern Background -->
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: repeating-linear-gradient(0deg, #000 0px, #000 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #000 0px, #000 1px, transparent 1px, transparent 40px);"></div>
    
    <!-- Decorative Elements -->
    <div class="absolute top-20 right-10 w-32 h-32 bg-gray-200 rounded-2xl opacity-50"></div>
    <div class="absolute top-40 right-32 w-24 h-24 bg-gray-300 rounded-2xl opacity-30"></div>
    <div class="absolute bottom-20 right-20 w-40 h-40 bg-gray-200 rounded-2xl opacity-40"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-4xl mx-auto">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-200 rounded-full px-4 py-2 text-sm font-semibold text-[#3B7BF8] mb-8" data-aos="fade-up">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
                {{ __('programs.hero.badge') }}
            </div>
            
            <!-- Title -->
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-display font-extrabold text-gray-900 mb-6 leading-tight" data-aos="fade-up" data-aos-delay="100">
                {{ __('programs.hero.title') }}
            </h1>
            
            <!-- Description -->
            <p class="text-lg text-gray-600 mb-4" data-aos="fade-up" data-aos-delay="200">
                {{ __('programs.hero.subtitle') }}
            </p>
            
            <p class="text-base text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="300">
                {{ __('programs.hero.description') }}
            </p>
        </div>
    </div>
</section>

<!-- Freelances Program Section -->
<section class="py-20 lg:py-28 bg-white relative">
    <!-- Subtle Grid Pattern Background -->
    <div class="absolute inset-0 opacity-[0.02]" style="background-image: repeating-linear-gradient(0deg, #000 0px, #000 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #000 0px, #000 1px, transparent 1px, transparent 40px);"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">
            <!-- Left: Content -->
            <div data-aos="fade-right">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 bg-blue-50 rounded-full px-4 py-2 text-sm font-semibold text-[#3B7BF8] mb-6">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    {{ __('programs.freelance.badge') }}
                </div>
                
                <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    {{ __('programs.freelance.title') }}
                </h2>
                
                <h3 class="text-xl font-bold text-[#3B7BF8] mb-4">
                    {{ __('programs.freelance.subtitle') }}
                </h3>
                
                <p class="text-gray-600 text-base leading-relaxed mb-8">
                    {{ __('programs.freelance.description') }}
                </p>
                
                <!-- Avantages -->
                <div class="bg-blue-50 rounded-2xl p-6 mb-6">
                    <div class="flex items-center gap-2 mb-4">
                        <svg class="w-5 h-5 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                        </svg>
                        <h4 class="font-bold text-gray-900">{{ __('programs.freelance.advantages_title') }}</h4>
                    </div>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        @foreach(['advantage1', 'advantage2', 'advantage3', 'advantage4', 'advantage5', 'advantage6'] as $advantage)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#3B7BF8] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-sm text-gray-700">{{ __('programs.freelance.' . $advantage) }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                
                <!-- Garanties -->
                <div class="bg-green-50 rounded-2xl p-6 mb-8">
                    <div class="flex items-center gap-2 mb-4">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <h4 class="font-bold text-gray-900">{{ __('programs.freelance.guarantees_title') }}</h4>
                    </div>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        @foreach(['guarantee1', 'guarantee2', 'guarantee3', 'guarantee4'] as $guarantee)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-green-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-sm text-gray-700">{{ __('programs.freelance.' . $guarantee) }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                
                <!-- CTA Button -->
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-[#3B7BF8] text-white text-base font-semibold px-8 py-4 rounded-full hover:bg-[#2563EB] hover:-translate-y-0.5 transition-all shadow-lg shadow-blue-500/30">
                    {{ __('programs.freelance.cta') }} →
                </a>
            </div>
            
            <!-- Right: Images -->
            <div class="space-y-6" data-aos="fade-left">
                <div class="rounded-2xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?q=80&w=800&auto=format&fit=crop" 
                         alt="Freelance handshake" 
                         class="w-full h-[400px] object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=800&auto=format&fit=crop" 
                         alt="Team collaboration" 
                         class="w-full h-[300px] object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Students Program Section -->
<section class="py-20 lg:py-28 bg-gray-50 relative">
    <!-- Subtle Grid Pattern Background -->
    <div class="absolute inset-0 opacity-[0.02]" style="background-image: repeating-linear-gradient(0deg, #000 0px, #000 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #000 0px, #000 1px, transparent 1px, transparent 40px);"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">
            <!-- Left: Images -->
            <div class="space-y-6" data-aos="fade-right">
                <div class="rounded-2xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=800&auto=format&fit=crop" 
                         alt="Students collaboration" 
                         class="w-full h-[400px] object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=800&auto=format&fit=crop" 
                         alt="Student coding" 
                         class="w-full h-[300px] object-cover">
                </div>
            </div>
            
            <!-- Right: Content -->
            <div data-aos="fade-left">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 bg-blue-50 rounded-full px-4 py-2 text-sm font-semibold text-[#3B7BF8] mb-6">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                    {{ __('programs.students.badge') }}
                </div>
                
                <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    {{ __('programs.students.title') }}
                </h2>
                
                <h3 class="text-xl font-bold text-[#3B7BF8] mb-4">
                    {{ __('programs.students.subtitle') }}
                </h3>
                
                <p class="text-gray-600 text-base leading-relaxed mb-8">
                    {{ __('programs.students.description') }}
                </p>
                
                <!-- Avantages -->
                <div class="bg-blue-50 rounded-2xl p-6 mb-6">
                    <div class="flex items-center gap-2 mb-4">
                        <svg class="w-5 h-5 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                        </svg>
                        <h4 class="font-bold text-gray-900">{{ __('programs.students.advantages_title') }}</h4>
                    </div>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        @foreach(['advantage1', 'advantage2', 'advantage3', 'advantage4', 'advantage5', 'advantage6'] as $advantage)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-[#3B7BF8] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-sm text-gray-700">{{ __('programs.students.' . $advantage) }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                
                <!-- Garanties -->
                <div class="bg-green-50 rounded-2xl p-6 mb-8">
                    <div class="flex items-center gap-2 mb-4">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <h4 class="font-bold text-gray-900">{{ __('programs.students.guarantees_title') }}</h4>
                    </div>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        @foreach(['guarantee1', 'guarantee2', 'guarantee3', 'guarantee4'] as $guarantee)
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-green-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-sm text-gray-700">{{ __('programs.students.' . $guarantee) }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                
                <!-- CTA Button -->
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-[#3B7BF8] text-white text-base font-semibold px-8 py-4 rounded-full hover:bg-[#2563EB] hover:-translate-y-0.5 transition-all shadow-lg shadow-blue-500/30">
                    {{ __('programs.students.cta') }} →
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Component -->
<x-why-choose-us />

<!-- Partners Component -->
<x-partners-section />
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
