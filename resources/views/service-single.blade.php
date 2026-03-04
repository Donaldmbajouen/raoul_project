@extends('layouts.app')

@section('title', __('services.single.title'))

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
            <!-- Breadcrumb -->
            <div class="flex items-center justify-center gap-2 text-sm mb-6" data-aos="fade-up">
                <a href="{{ route('home') }}" class="text-[#3B7BF8] hover:underline">
                    {{ __('services.breadcrumb.home') }}
                </a>
                <span class="text-gray-400">/</span>
                <span class="text-gray-600">{{ __('services.breadcrumb.services') }}</span>
                <span class="text-gray-400">/</span>
                <span class="text-gray-600">{{ __('services.single.service_name') }}</span>
            </div>
            
            <!-- Title -->
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-display font-extrabold text-gray-900 mb-6" data-aos="fade-up" data-aos-delay="100">
                {{ __('services.single.title') }}
            </h1>
            
            <!-- Description -->
            <p class="text-lg text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                {{ __('services.single.description') }}
            </p>
        </div>
    </div>
</section>

<!-- Service Content -->
<section class="py-20 lg:py-28 bg-white relative">
    <!-- Subtle Grid Pattern Background -->
    <div class="absolute inset-0 opacity-[0.02]" style="background-image: repeating-linear-gradient(0deg, #000 0px, #000 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #000 0px, #000 1px, transparent 1px, transparent 40px);"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center mb-20">
            <!-- Left: Content -->
            <div data-aos="fade-right">
                <div class="inline-block mb-6">
                    <span class="text-[#3B7BF8] text-sm font-bold uppercase tracking-wider">
                        {{ __('services.single.badge') }}
                    </span>
                </div>
                
                <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    {{ __('services.single.section1_title') }}
                </h2>
                
                <p class="text-gray-600 text-base leading-relaxed mb-8">
                    {{ __('services.single.section1_content') }}
                </p>
                
                <!-- Features List -->
                <ul class="space-y-4">
                    @foreach(['feature1', 'feature2', 'feature3', 'feature4'] as $feature)
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-3.5 h-3.5 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-900">{{ __('services.single.' . $feature) }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            
            <!-- Right: Image -->
            <div class="relative" data-aos="fade-left">
                <div class="rounded-2xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop" 
                         alt="Service" 
                         class="w-full h-[500px] object-cover">
                </div>
            </div>
        </div>
        
        <!-- Process Section -->
        <div class="mb-20" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 mb-12 text-center">
                {{ __('services.single.process_title') }}
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                @foreach(['step1', 'step2', 'step3', 'step4'] as $index => $step)
                <div class="text-center" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-blue-50 flex items-center justify-center">
                        <span class="text-2xl font-bold text-[#3B7BF8]">{{ $index + 1 }}</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">
                        {{ __('services.single.' . $step . '_title') }}
                    </h3>
                    <p class="text-sm text-gray-600">
                        {{ __('services.single.' . $step . '_desc') }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
        
        <!-- Benefits Section -->
        <div class="bg-gradient-to-br from-blue-50 to-white rounded-3xl p-8 lg:p-12" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 mb-8 text-center">
                {{ __('services.single.benefits_title') }}
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach(['benefit1', 'benefit2', 'benefit3'] as $benefit)
                <div class="bg-white rounded-2xl p-6 shadow-lg">
                    <div class="w-12 h-12 mb-4 rounded-full bg-blue-100 flex items-center justify-center">
                        <svg class="w-6 h-6 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        {{ __('services.single.' . $benefit . '_title') }}
                    </h3>
                    <p class="text-sm text-gray-600">
                        {{ __('services.single.' . $benefit . '_desc') }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gray-900 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <h2 class="text-3xl lg:text-4xl font-display font-bold mb-6">
            {{ __('services.single.cta_title') }}
        </h2>
        <p class="text-lg text-white/80 mb-8">
            {{ __('services.single.cta_description') }}
        </p>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-[#3B7BF8] text-white text-base font-semibold px-8 py-4 rounded-full hover:bg-[#2563EB] hover:-translate-y-0.5 transition-all shadow-lg shadow-blue-500/30">
            {{ __('services.single.cta_button') }} →
        </a>
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
