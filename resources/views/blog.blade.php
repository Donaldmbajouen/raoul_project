@extends('layouts.app')

@section('title', __('blog.title'))

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
                {{ __('blog.hero.title') }}
            </h1>
            
            <!-- Breadcrumb -->
            <div class="flex items-center justify-center gap-2 text-sm" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('home') }}" class="text-[#3B7BF8] hover:underline">
                    {{ __('blog.breadcrumb.home') }}
                </a>
                <span class="text-gray-400">/</span>
                <span class="text-gray-600">{{ __('blog.breadcrumb.blog') }}</span>
            </div>
        </div>
    </div>
</section>

<!-- Blog Grid Section -->
<section class="py-20 lg:py-28 bg-white relative">
    <!-- Subtle Grid Pattern Background -->
    <div class="absolute inset-0 opacity-[0.02]" style="background-image: repeating-linear-gradient(0deg, #000 0px, #000 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #000 0px, #000 1px, transparent 1px, transparent 40px);"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Blog Articles Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Article 1 -->
            <x-blog-card 
                :title="__('blog.article1.title')"
                :date="__('blog.article1.date')"
                image="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=800&auto=format&fit=crop"
                delay="100"
            />
            
            <!-- Article 2 -->
            <x-blog-card 
                :title="__('blog.article2.title')"
                :date="__('blog.article2.date')"
                image="https://images.unsplash.com/photo-1553877522-43269d4ea984?q=80&w=800&auto=format&fit=crop"
                delay="200"
            />
            
            <!-- Article 3 -->
            <x-blog-card 
                :title="__('blog.article3.title')"
                :date="__('blog.article3.date')"
                image="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=800&auto=format&fit=crop"
                delay="300"
            />
            
            <!-- Article 4 -->
            <x-blog-card 
                :title="__('blog.article4.title')"
                :date="__('blog.article4.date')"
                image="https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=800&auto=format&fit=crop"
                delay="100"
            />
            
            <!-- Article 5 -->
            <x-blog-card 
                :title="__('blog.article5.title')"
                :date="__('blog.article5.date')"
                image="https://images.unsplash.com/photo-1556761175-b413da4baf72?q=80&w=800&auto=format&fit=crop"
                delay="200"
            />
            
            <!-- Article 6 -->
            <x-blog-card 
                :title="__('blog.article6.title')"
                :date="__('blog.article6.date')"
                image="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=800&auto=format&fit=crop"
                delay="300"
            />
            
            <!-- Article 7 -->
            <x-blog-card 
                :title="__('blog.article7.title')"
                :date="__('blog.article7.date')"
                image="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=800&auto=format&fit=crop"
                delay="100"
            />
            
            <!-- Article 8 -->
            <x-blog-card 
                :title="__('blog.article8.title')"
                :date="__('blog.article8.date')"
                image="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=800&auto=format&fit=crop"
                delay="200"
            />
            
            <!-- Article 9 -->
            <x-blog-card 
                :title="__('blog.article9.title')"
                :date="__('blog.article9.date')"
                image="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=800&auto=format&fit=crop"
                delay="300"
            />
        </div>
    </div>
</section>

<!-- CTA Component -->
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
