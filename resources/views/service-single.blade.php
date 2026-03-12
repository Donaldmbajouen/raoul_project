@extends('layouts.app')

@section('title', $service->title)

@section('content')
<!-- Hero Section -->
<section class="relative py-20 lg:py-32 bg-gradient-to-br from-gray-50 to-white overflow-hidden">
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: repeating-linear-gradient(0deg, #000 0px, #000 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #000 0px, #000 1px, transparent 1px, transparent 40px);"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto">
            <!-- Breadcrumb -->
            <div class="flex items-center justify-center gap-2 text-sm mb-6" data-aos="fade-up">
                <a href="{{ route('home') }}" class="text-[#3B7BF8] hover:underline">{{ __('Accueil') }}</a>
                <span class="text-gray-400">/</span>
                <a href="{{ route('services') }}" class="text-[#3B7BF8] hover:underline">{{ __('Services') }}</a>
                <span class="text-gray-400">/</span>
                <span class="text-gray-600">{{ $service->title }}</span>
            </div>
            
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-display font-extrabold text-gray-900 mb-6" data-aos="fade-up" data-aos-delay="100">
                {{ $service->title }}
            </h1>
            
            <p class="text-lg text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                {{ $service->short_description }}
            </p>
            
            @if($service->base_price)
            <div class="mt-8" data-aos="fade-up" data-aos-delay="300">
                <span class="inline-block px-6 py-3 bg-[#3B7BF8] text-white rounded-full font-bold text-xl">
                    À partir de {{ number_format($service->base_price, 0, ',', ' ') }} FCFA
                </span>
            </div>
            @endif
        </div>
    </div>
</section>

<!-- Service Content -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
            <!-- Image -->
            @if($service->image)
            <div data-aos="fade-right">
                <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" 
                     class="w-full h-auto rounded-2xl shadow-2xl">
            </div>
            @endif
            
            <!-- Description -->
            <div data-aos="fade-left">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">{{ __('Description') }}</h2>
                <div class="prose prose-lg max-w-none text-gray-600">
                    {!! nl2br(e($service->full_description)) !!}
                </div>
            </div>
        </div>
        
        <!-- Advantages -->
        @if($service->advantages && count($service->advantages) > 0)
        <div class="mb-20" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">{{ __('Avantages') }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($service->advantages as $advantage)
                <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-[#3B7BF8] rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $advantage['title'] ?? $advantage }}</h3>
                    @if(isset($advantage['description']))
                    <p class="text-gray-600">{{ $advantage['description'] }}</p>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
        @endif
        
        <!-- Process -->
        @if($service->process && count($service->process) > 0)
        <div class="mb-20" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">{{ __('Notre Processus') }}</h2>
            <div class="space-y-6">
                @foreach($service->process as $index => $step)
                <div class="flex gap-6 items-start">
                    <div class="flex-shrink-0 w-12 h-12 bg-[#3B7BF8] text-white rounded-full flex items-center justify-center font-bold text-xl">
                        {{ $step['number'] ?? $index + 1 }}
                    </div>
                    <div class="flex-1 bg-gray-50 rounded-xl p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $step['title'] ?? $step }}</h3>
                        @if(isset($step['description']))
                        <p class="text-gray-600">{{ $step['description'] }}</p>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        
        <!-- FAQ -->
        @if($service->faq && count($service->faq) > 0)
        <div class="mb-20" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">{{ __('Questions Fréquentes') }}</h2>
            <div class="max-w-3xl mx-auto space-y-4">
                @foreach($service->faq as $item)
                <details class="bg-gray-50 rounded-xl p-6 group">
                    <summary class="font-bold text-gray-900 cursor-pointer list-none flex items-center justify-between">
                        {{ $item['question'] ?? $item }}
                        <svg class="w-5 h-5 text-[#3B7BF8] group-open:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </summary>
                    @if(isset($item['answer']))
                    <p class="text-gray-600 mt-4">{{ $item['answer'] }}</p>
                    @endif
                </details>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-br from-[#3B7BF8] to-[#2563EB]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold text-white mb-6" data-aos="fade-up">
            {{ __('Intéressé par ce service ?') }}
        </h2>
        <p class="text-xl text-blue-100 mb-8" data-aos="fade-up" data-aos-delay="100">
            {{ __('Contactez-nous pour obtenir un devis personnalisé') }}
        </p>
        <a href="{{ route('contact') }}" 
           class="inline-flex items-center gap-2 bg-white text-[#3B7BF8] px-8 py-4 rounded-full font-bold hover:bg-gray-100 transition-all shadow-xl"
           data-aos="fade-up" data-aos-delay="200">
            {{ __('Demander un devis') }}
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</section>
@endsection
