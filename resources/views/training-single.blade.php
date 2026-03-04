@extends('layouts.app')

@section('title', __('training.single.title'))

@section('content')
<!-- Hero Section -->
<section class="relative py-20 lg:py-32 bg-gradient-to-br from-gray-50 to-white overflow-hidden">
    <!-- Subtle Grid Pattern Background -->
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: repeating-linear-gradient(0deg, #000 0px, #000 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #000 0px, #000 1px, transparent 1px, transparent 40px);"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto">
            <!-- Breadcrumb -->
            <div class="flex items-center justify-center gap-2 text-sm mb-8" data-aos="fade-up">
                <a href="{{ route('home') }}" class="text-[#3B7BF8] hover:underline">
                    {{ __('training.single.breadcrumb.home') }}
                </a>
                <span class="text-gray-400">/</span>
                <a href="{{ route('training') }}" class="text-[#3B7BF8] hover:underline">
                    {{ __('training.single.breadcrumb.training') }}
                </a>
                <span class="text-gray-400">/</span>
                <span class="text-gray-600">{{ __('training.single.breadcrumb.current') }}</span>
            </div>
            
            <!-- Title -->
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-display font-extrabold text-gray-900 mb-6" data-aos="fade-up" data-aos-delay="100">
                {{ __('training.single.hero.title') }}
            </h1>
        </div>
    </div>
</section>

<!-- Main Content Section -->
<section class="py-20 lg:py-28 bg-white relative">
    <!-- Subtle Grid Pattern Background -->
    <div class="absolute inset-0 opacity-[0.02]" style="background-image: repeating-linear-gradient(0deg, #000 0px, #000 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #000 0px, #000 1px, transparent 1px, transparent 40px);"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
            <!-- Left: Image -->
            <div data-aos="fade-right">
                <div class="rounded-2xl overflow-hidden shadow-2xl sticky top-8">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=800&auto=format&fit=crop" 
                         alt="{{ __('training.single.hero.title') }}" 
                         class="w-full h-[500px] object-cover">
                </div>
            </div>
            
            <!-- Right: Content -->
            <div data-aos="fade-left">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 bg-blue-50 rounded-full px-4 py-2 text-sm font-semibold text-[#3B7BF8] mb-6">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                    {{ __('training.single.content.badge') }}
                </div>
                
                <h2 class="text-3xl font-display font-bold text-gray-900 mb-6">
                    {{ __('training.single.content.title') }}
                </h2>
                
                <p class="text-gray-600 leading-relaxed mb-8">
                    {{ __('training.single.content.description') }}
                </p>
                
                <!-- Features List -->
                <ul class="space-y-4 mb-8">
                    @foreach(['feature1', 'feature2', 'feature3', 'feature4'] as $feature)
                    <li class="flex items-start gap-3">
                        <div class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mt-0.5">
                            <svg class="w-4 h-4 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-gray-700">{{ __('training.single.content.' . $feature) }}</span>
                    </li>
                    @endforeach
                </ul>
                
                <!-- CTA Button -->
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-[#3B7BF8] text-white text-base font-semibold px-8 py-4 rounded-full hover:bg-[#2563EB] hover:-translate-y-0.5 transition-all shadow-lg shadow-blue-500/30">
                    {{ __('training.single.content.cta') }} →
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Why Section -->
<section class="py-20 lg:py-28 bg-gray-50 relative">
    <!-- Subtle Grid Pattern Background -->
    <div class="absolute inset-0 opacity-[0.02]" style="background-image: repeating-linear-gradient(0deg, #000 0px, #000 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #000 0px, #000 1px, transparent 1px, transparent 40px);"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 bg-blue-50 rounded-full px-4 py-2 text-sm font-semibold text-[#3B7BF8] mb-4">
                {{ __('training.single.why.badge') }}
            </div>
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 mb-4">
                {{ __('training.single.why.title') }}
            </h2>
        </div>
        
        <!-- Benefits Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
            $benefits = [
                [
                    'key' => 'innovation',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>'
                ],
                [
                    'key' => 'quality',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>'
                ],
                [
                    'key' => 'value',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>'
                ],
                [
                    'key' => 'scalability',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>'
                ],
                [
                    'key' => 'automation',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>'
                ],
                [
                    'key' => 'support',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>'
                ]
            ];
            @endphp
            
            @foreach($benefits as $index => $benefit)
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        {!! $benefit['icon'] !!}
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">
                    {{ __('training.single.why.' . $benefit['key'] . '_title') }}
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    {{ __('training.single.why.' . $benefit['key'] . '_desc') }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="py-20 lg:py-28 bg-white relative">
    <!-- Subtle Grid Pattern Background -->
    <div class="absolute inset-0 opacity-[0.02]" style="background-image: repeating-linear-gradient(0deg, #000 0px, #000 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #000 0px, #000 1px, transparent 1px, transparent 40px);"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 bg-blue-50 rounded-full px-4 py-2 text-sm font-semibold text-[#3B7BF8] mb-4">
                {{ __('training.single.pricing.badge') }}
            </div>
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 mb-4">
                {{ __('training.single.pricing.title') }}
            </h2>
        </div>
        
        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @php
            $packs = [
                [
                    'key' => 'starter',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>'
                ],
                [
                    'key' => 'pro',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>'
                ],
                [
                    'key' => 'enterprise',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>'
                ]
            ];
            @endphp
            
            @foreach($packs as $index => $pack)
            <div class="bg-{{ $pack['key'] === 'pro' ? 'gradient-to-br from-[#3B7BF8] to-[#2563EB] text-white' : 'white' }} rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all {{ $pack['key'] === 'pro' ? 'transform scale-105' : '' }}" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <!-- Icon -->
                <div class="w-14 h-14 bg-{{ $pack['key'] === 'pro' ? 'white/20' : 'blue-100' }} rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-{{ $pack['key'] === 'pro' ? 'white' : '[#3B7BF8]' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        {!! $pack['icon'] !!}
                    </svg>
                </div>
                
                <!-- Title -->
                <h3 class="text-2xl font-bold mb-2">
                    {{ __('training.single.pricing.' . $pack['key'] . '_title') }}
                </h3>
                
                <!-- Features -->
                <ul class="space-y-3 mb-8">
                    @for($i = 1; $i <= 6; $i++)
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 flex-shrink-0 mt-0.5 {{ $pack['key'] === 'pro' ? 'text-white' : 'text-[#3B7BF8]' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-sm {{ $pack['key'] === 'pro' ? 'text-white/90' : 'text-gray-600' }}">
                            {{ __('training.single.pricing.' . $pack['key'] . '_feature' . $i) }}
                        </span>
                    </li>
                    @endfor
                </ul>
                
                <!-- CTA -->
                <a href="{{ route('contact') }}" class="block text-center bg-{{ $pack['key'] === 'pro' ? 'white text-[#3B7BF8]' : '[#3B7BF8] text-white' }} font-semibold px-6 py-3 rounded-full hover:scale-105 transition-all">
                    {{ __('training.single.pricing.cta') }}
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<x-why-choose-us />

<!-- Partners Section -->
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
