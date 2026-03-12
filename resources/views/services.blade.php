@extends('layouts.app')

@section('title', __('Nos Services'))

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[60vh] flex items-center justify-center bg-gradient-to-br from-gray-900 via-black to-gray-900 overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=2000')] bg-cover bg-center opacity-10"></div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl md:text-7xl font-bold text-white mb-6" data-aos="fade-up">
            {{ __('Nos Services') }}
        </h1>
        <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            {{ __('Des solutions digitales sur mesure pour propulser votre entreprise') }}
        </p>
    </div>
</section>

<!-- Services Grid -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($services->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $service)
            <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                @if($service->image)
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    @if($service->icon)
                    <div class="absolute top-4 right-4 w-12 h-12 bg-white rounded-lg p-2">
                        <img src="{{ asset('storage/' . $service->icon) }}" alt="" class="w-full h-full object-contain">
                    </div>
                    @endif
                </div>
                @endif
                
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="px-3 py-1 bg-[#3B7BF8]/10 text-[#3B7BF8] text-xs font-semibold rounded-full">
                            {{ $service->category == 'SR' ? 'Services Rapides' : 'Gestion Longue' }}
                        </span>
                        @if($service->base_price)
                        <span class="text-sm font-bold text-gray-900">{{ number_format($service->base_price, 0, ',', ' ') }} FCFA</span>
                        @endif
                    </div>
                    
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-[#3B7BF8] transition-colors">
                        {{ $service->title }}
                    </h3>
                    
                    <p class="text-gray-600 mb-6 line-clamp-3">
                        {{ $service->short_description }}
                    </p>
                    
                    <a href="{{ route('services.show', $service->slug) }}" 
                       class="inline-flex items-center gap-2 text-[#3B7BF8] font-semibold hover:gap-4 transition-all">
                        {{ __('En savoir plus') }}
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-20">
            <svg class="w-24 h-24 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
            </svg>
            <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ __('Aucun service disponible') }}</h3>
            <p class="text-gray-600">{{ __('Nos services seront bientôt disponibles.') }}</p>
        </div>
        @endif
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-br from-[#3B7BF8] to-[#2563EB]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold text-white mb-6" data-aos="fade-up">
            {{ __('Prêt à démarrer votre projet ?') }}
        </h2>
        <p class="text-xl text-blue-100 mb-8" data-aos="fade-up" data-aos-delay="100">
            {{ __('Contactez-nous dès aujourd\'hui pour discuter de vos besoins') }}
        </p>
        <a href="{{ route('contact') }}" 
           class="inline-flex items-center gap-2 bg-white text-[#3B7BF8] px-8 py-4 rounded-full font-bold hover:bg-gray-100 transition-all shadow-xl hover:shadow-2xl"
           data-aos="fade-up" data-aos-delay="200">
            {{ __('Nous contacter') }}
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</section>
@endsection
