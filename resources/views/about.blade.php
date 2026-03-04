@extends('layouts.app')

@section('title', __('about.title'))

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
        <div class="text-center max-w-3xl mx-auto">
            <!-- Title -->
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-display font-extrabold text-gray-900 mb-6" data-aos="fade-up">
                {{ __('about.hero.title') }}
            </h1>
            
            <!-- Breadcrumb -->
            <div class="flex items-center justify-center gap-2 text-sm" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('home') }}" class="text-[#3B7BF8] hover:underline">
                    {{ __('about.breadcrumb.home') }}
                </a>
                <span class="text-gray-400">/</span>
                <span class="text-gray-600">{{ __('about.breadcrumb.about') }}</span>
            </div>
        </div>
    </div>
</section>

<!-- Main Content Section -->
<section class="py-20 lg:py-28 bg-white relative">
    <!-- Subtle Grid Pattern Background -->
    <div class="absolute inset-0 opacity-[0.02]" style="background-image: repeating-linear-gradient(0deg, #000 0px, #000 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #000 0px, #000 1px, transparent 1px, transparent 40px);"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <!-- Left: Images -->
            <div class="relative" data-aos="fade-right">
                <!-- Badge -->
                <div class="absolute -top-6 left-6 z-20 bg-[#3B7BF8] text-white rounded-2xl px-6 py-4 shadow-xl">
                    <div class="flex items-center gap-3">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <div>
                            <div class="text-2xl font-bold">30 +</div>
                            <div class="text-xs opacity-90">{{ __('about.badge.experience') }}</div>
                        </div>
                    </div>
                </div>
                
                <!-- Images Layout: Large + Small -->
                <div class="relative mt-12">
                    <!-- Large Main Image -->
                    <div class="rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=800&auto=format&fit=crop" 
                             alt="Team collaboration" 
                             class="w-full h-[500px] object-cover">
                    </div>
                    
                    <!-- Small Image at Bottom Right -->
                    <div class="absolute -bottom-8 -right-8 w-48 h-48 rounded-2xl overflow-hidden shadow-2xl border-4 border-white">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=400&auto=format&fit=crop" 
                             alt="Development" 
                             class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
            
            <!-- Right: Content -->
            <div data-aos="fade-left">
                <div class="inline-block mb-6">
                    <span class="text-[#3B7BF8] text-sm font-bold uppercase tracking-wider">
                        {{ __('about.content.badge') }}
                    </span>
                </div>
                
                <h2 class="text-3xl lg:text-4xl xl:text-5xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    {{ __('about.content.title_part1') }}
                    <span class="text-[#3B7BF8]">{{ __('about.content.title_part2') }}</span>
                </h2>
                
                <div class="space-y-4 text-gray-600 text-base leading-relaxed mb-8">
                    <p>{{ __('about.content.description1') }}</p>
                    <p>{{ __('about.content.description2') }}</p>
                </div>
                
                <p class="text-gray-600 text-base leading-relaxed mb-10">
                    {{ __('about.content.description3') }}
                </p>
                
                <!-- Features Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach(['feature1', 'feature2', 'feature3', 'feature4', 'feature5', 'feature6'] as $feature)
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-3.5 h-3.5 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-900">{{ __('about.content.' . $feature) }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-20 lg:py-28 bg-gradient-to-br from-gray-50 to-white relative">
    <!-- Subtle Grid Pattern Background -->
    <div class="absolute inset-0 opacity-[0.02]" style="background-image: repeating-linear-gradient(0deg, #000 0px, #000 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #000 0px, #000 1px, transparent 1px, transparent 40px);"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <div class="inline-block mb-4">
                <span class="text-[#3B7BF8] text-sm font-bold uppercase tracking-wider">
                    {{ __('about.stats.badge') }}
                </span>
            </div>
            <h2 class="text-3xl lg:text-4xl xl:text-5xl font-display font-bold text-gray-900 leading-tight">
                {{ __('about.stats.title') }}
            </h2>
        </div>
        
        <!-- Stats Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Stat 1 -->
            <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="text-5xl lg:text-6xl font-display font-extrabold text-gray-900 mb-2">
                    <span class="counter" data-target="92">0</span><span class="text-[#3B7BF8]">+%</span>
                </div>
                <p class="text-gray-600 text-sm">{{ __('about.stats.stat1') }}</p>
            </div>
            
            <!-- Stat 2 -->
            <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="text-5xl lg:text-6xl font-display font-extrabold text-gray-900 mb-2">
                    <span class="counter" data-target="15">0</span><span class="text-[#3B7BF8]">+</span>
                </div>
                <p class="text-gray-600 text-sm">{{ __('about.stats.stat2') }}</p>
            </div>
            
            <!-- Stat 3 -->
            <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="text-5xl lg:text-6xl font-display font-extrabold text-gray-900 mb-2">
                    <span class="counter" data-target="4">0</span><span class="text-[#3B7BF8] text-4xl"> Semaines</span>
                </div>
                <p class="text-gray-600 text-sm">{{ __('about.stats.stat3') }}</p>
            </div>
            
            <!-- Stat 4 -->
            <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                <div class="text-5xl lg:text-6xl font-display font-extrabold text-gray-900 mb-2">
                    <span class="counter" data-target="10">0</span><span class="text-[#3B7BF8] text-4xl">+ projets</span>
                </div>
                <p class="text-gray-600 text-sm">{{ __('about.stats.stat4') }}</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Component -->
<x-why-choose-us />

<!-- Testimonials Component -->
<x-testimonials-section />

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
    
    // Counter Animation
    const counters = document.querySelectorAll('.counter');
    let hasAnimated = false;
    
    const animateCounters = () => {
        if (hasAnimated) return;
        
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            const duration = 2000; // 2 seconds
            const increment = target / (duration / 16); // 60fps
            let current = 0;
            
            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    counter.textContent = Math.floor(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            };
            
            updateCounter();
        });
        
        hasAnimated = true;
    };
    
    // Trigger animation when stats section is in view
    const statsSection = document.querySelector('.counter');
    if (statsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                }
            });
        }, { threshold: 0.5 });
        
        observer.observe(statsSection);
    }
</script>
@endpush
