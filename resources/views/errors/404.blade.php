@extends('layouts.app')

@section('title', '404 - Page non trouvée')

@section('content')
<!-- 404 Section -->
<section class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-50 to-white overflow-hidden">
    <!-- Subtle Grid Pattern Background -->
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: repeating-linear-gradient(0deg, #000 0px, #000 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #000 0px, #000 1px, transparent 1px, transparent 40px);"></div>
    
    <!-- Decorative Elements -->
    <div class="absolute top-20 right-10 w-32 h-32 bg-red-200 rounded-2xl opacity-50 animate-pulse"></div>
    <div class="absolute top-40 right-32 w-24 h-24 bg-red-300 rounded-2xl opacity-30 animate-pulse" style="animation-delay: 0.5s;"></div>
    <div class="absolute bottom-20 right-20 w-40 h-40 bg-red-200 rounded-2xl opacity-40 animate-pulse" style="animation-delay: 1s;"></div>
    <div class="absolute top-40 left-20 w-28 h-28 bg-blue-200 rounded-2xl opacity-40 animate-pulse" style="animation-delay: 1.5s;"></div>
    <div class="absolute bottom-32 left-32 w-36 h-36 bg-blue-300 rounded-2xl opacity-30 animate-pulse" style="animation-delay: 2s;"></div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 py-20">
        <!-- 404 Number -->
        <div class="mb-8" data-aos="fade-up">
            <h1 class="text-[150px] sm:text-[200px] lg:text-[250px] font-display font-extrabold leading-none">
                <span class="bg-gradient-to-r from-[#3B7BF8] to-[#2563EB] bg-clip-text text-transparent">404</span>
            </h1>
        </div>
        
        <!-- Icon -->
        <div class="flex justify-center mb-8" data-aos="fade-up" data-aos-delay="100">
            <div class="w-24 h-24 rounded-full bg-blue-50 flex items-center justify-center">
                <svg class="w-12 h-12 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
        </div>
        
        <!-- Title -->
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold text-gray-900 mb-6" data-aos="fade-up" data-aos-delay="200">
            Oups ! Page introuvable
        </h2>
        
        <!-- Description -->
        <p class="text-lg text-gray-600 mb-10 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="300">
            La page que vous recherchez n'existe pas ou a été déplacée. Ne vous inquiétez pas, nous sommes là pour vous aider à retrouver votre chemin.
        </p>
        
        <!-- Actions -->
        <div class="flex flex-wrap items-center justify-center gap-4" data-aos="fade-up" data-aos-delay="400">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-2 bg-[#3B7BF8] text-white text-base font-semibold px-8 py-4 rounded-full hover:bg-[#2563EB] hover:-translate-y-0.5 transition-all shadow-xl shadow-blue-500/30">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                Retour à l'accueil
            </a>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-gray-100 text-gray-900 text-base font-semibold px-8 py-4 rounded-full hover:bg-gray-200 transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Nous contacter
            </a>
        </div>
        
        <!-- Quick Links -->
        <div class="mt-16 pt-12 border-t border-gray-200" data-aos="fade-up" data-aos-delay="500">
            <p class="text-sm text-gray-500 mb-6">Liens utiles :</p>
            <div class="flex flex-wrap items-center justify-center gap-6">
                <a href="{{ route('about') }}" class="text-sm text-gray-600 hover:text-[#3B7BF8] transition-colors">
                    À propos
                </a>
                <span class="text-gray-300">•</span>
                <a href="{{ route('programs') }}" class="text-sm text-gray-600 hover:text-[#3B7BF8] transition-colors">
                    Formations
                </a>
                <span class="text-gray-300">•</span>
                <a href="{{ route('realizations') }}" class="text-sm text-gray-600 hover:text-[#3B7BF8] transition-colors">
                    Réalisations
                </a>
                <span class="text-gray-300">•</span>
                <a href="{{ route('blog') }}" class="text-sm text-gray-600 hover:text-[#3B7BF8] transition-colors">
                    Blog
                </a>
            </div>
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
