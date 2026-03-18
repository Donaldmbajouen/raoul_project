@extends('layouts.app')

@section('title', __('home.title'))

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-black">
    <!-- Vidéo de fond -->
    <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover">
        <source src="{{ asset('assets/videos/video.mp4') }}" type="video/mp4">
    </video>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-black/75 via-black/60 to-blue-900/20 z-10"></div>
    
    <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 text-center">
        <!-- Badge -->
        <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 rounded-full px-4 py-1.5 text-xs font-semibold text-white/90 backdrop-blur-md mb-8 uppercase tracking-wider" data-aos="fade-down">
            {{ __('home.hero.badge') }}
        </div>
        
        <!-- Title -->
        <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-display font-extrabold text-white mb-6 leading-tight" data-aos="fade-up" data-aos-delay="100">
            {{ __('home.hero.title_part1') }}
            <span class="block text-[#3B7BF8]">{{ __('home.hero.title_part2') }}</span>
        </h1>
        
        <!-- Description -->
        <p class="text-base sm:text-lg text-white/90 max-w-3xl mx-auto mb-10 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
            {{ __('home.hero.lead') }}
        </p>
        
        <!-- CTA Buttons -->
        <div class="flex flex-wrap items-center justify-center gap-4" data-aos="fade-up" data-aos-delay="300">
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-[#3B7BF8] text-white text-base font-semibold px-8 py-4 rounded-full hover:bg-[#2563EB] hover:-translate-y-0.5 transition-all shadow-xl shadow-blue-500/40">
                {{ __('home.hero.cta_primary') }} →
            </a>
            <a href="{{ route('services') }}" class="inline-flex items-center gap-2 bg-white/10 border border-white/30 text-white text-base font-semibold px-8 py-4 rounded-full hover:bg-white/20 backdrop-blur-md transition-all">
                {{ __('home.hero.cta_secondary') }} →
            </a>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <!-- Image Left -->
            <div class="relative order-2 lg:order-1" data-aos="fade-right" data-aos-duration="1000">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1200&auto=format&fit=crop" 
                         alt="Notre équipe" 
                         class="w-full object-cover">
                </div>
                <!-- Badge flottant -->
                <div class="absolute -bottom-6 -right-6 w-28 h-28 bg-[#3B7BF8] text-white rounded-full flex items-center justify-center shadow-2xl animate-bounce-slow">
                    <div class="text-center">
                        <svg class="w-8 h-8 mx-auto mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                        </svg>
                        <div class="text-[10px] font-bold uppercase tracking-wider">Découvrez</div>
                    </div>
                </div>
            </div>
            
            <!-- Content Right -->
            <div class="order-1 lg:order-2" data-aos="fade-left" data-aos-duration="1000">
                <div class="inline-block mb-6">
                    <span class="text-[#3B7BF8] text-sm font-bold uppercase tracking-wider">
                        {{ __('home.about.badge') }}
                    </span>
                </div>
                
                <h2 class="text-3xl lg:text-4xl xl:text-5xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    {{ __('home.about.title') }}
                </h2>
                
                <div class="space-y-4 text-gray-600 text-base leading-relaxed mb-8">
                    <p>{{ __('home.about.description1') }}</p>
                    <p>{{ __('home.about.description2') }}</p>
                    <p>{{ __('home.about.description3') }}</p>
                </div>
                
                <!-- Features -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-4 mb-10">
                    @foreach(['feature1', 'feature2', 'feature3', 'feature4', 'feature5', 'feature6'] as $feature)
                    <div class="flex items-start gap-3">
                        <div class="w-5 h-5 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-3 h-3 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-900 leading-snug">{{ __('home.about.' . $feature) }}</span>
                    </div>
                    @endforeach
                </div>
                
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-[#3B7BF8] text-white text-base font-semibold px-8 py-4 rounded-full hover:bg-[#2563EB] hover:-translate-y-0.5 transition-all shadow-lg shadow-blue-500/30">
                    {{ __('home.about.cta') }} →
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 lg:py-28 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="max-w-2xl mb-16" data-aos="fade-up">
            <div class="inline-block mb-4">
                <span class="text-[#3B7BF8] text-sm font-bold uppercase tracking-wider">
                    {{ __('home.services.badge') }}
                </span>
            </div>
            <h2 class="text-3xl lg:text-4xl xl:text-5xl font-display font-bold text-gray-900 mb-6 leading-tight">
                {{ __('home.services.title') }}
            </h2>
            <a href="{{ route('services') }}" class="inline-flex items-center gap-2 bg-[#3B7BF8] text-white text-base font-semibold px-8 py-4 rounded-full hover:bg-[#2563EB] hover:-translate-y-0.5 transition-all shadow-lg shadow-blue-500/30">
                {{ __('home.services.cta') }} →
            </a>
        </div>
        
        <!-- Services Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($services->take(3) as $service)
            <a href="{{ route('services.show', $service->slug) }}"
               class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 group"
               data-aos="fade-up" data-aos-delay="{{ ($loop->index + 1) * 100 }}">
                <div class="flex items-start justify-between mb-6">
                    <h3 class="text-2xl lg:text-3xl font-display font-bold text-gray-900 leading-tight pr-4 group-hover:text-[#3B7BF8] transition-colors">
                        {{ $service->title }}
                    </h3>
                    <div class="w-16 h-16 rounded-full bg-[#3B7BF8] flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"/>
                        </svg>
                    </div>
                </div>
                <div class="w-full h-px bg-gray-200 mb-6"></div>
                <p class="text-gray-600 text-base leading-relaxed mb-8">
                    {{ $service->short_description }}
                </p>
                @if($service->image)
                <div class="relative overflow-hidden rounded-3xl">
                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}"
                         class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                @endif
            </a>
            @empty
            <div class="col-span-3 text-center py-10 text-gray-400">Aucun service disponible.</div>
            @endforelse
        </div>
    </div>
</section>

<!-- Portfolio/Realizations Section -->
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-16" data-aos="fade-up">
            <div class="max-w-2xl">
                <div class="inline-block mb-4">
                    <span class="text-[#3B7BF8] text-sm font-bold uppercase tracking-wider">
                        {{ __('home.portfolio.badge') }}
                    </span>
                </div>
                <h2 class="text-3xl lg:text-4xl xl:text-5xl font-display font-bold text-gray-900 leading-tight">
                    {{ __('home.portfolio.title') }}
                </h2>
            </div>
            <a href="{{ route('realizations') }}" class="inline-flex items-center gap-2 bg-[#3B7BF8] text-white text-base font-semibold px-8 py-4 rounded-full hover:bg-[#2563EB] hover:-translate-y-0.5 transition-all shadow-lg shadow-blue-500/30 self-start lg:self-auto">
                {{ __('home.portfolio.cta') }} →
            </a>
        </div>
        
        <!-- Portfolio Cards - 2 per row -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            @forelse($featuredProjects as $project)
            @php
                $categoryColors = [
                    'Automatisation & Agent IA' => 'bg-[#3B7BF8]',
                    'Création De Site Web'       => 'bg-green-500',
                    'Marketing Digital'          => 'bg-purple-500',
                    'Conception Graphique'       => 'bg-yellow-500',
                ];
                $badgeColor = $categoryColors[$project->category] ?? 'bg-gray-500';
            @endphp
            <article class="bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group"
                     data-aos="fade-up" data-aos-delay="{{ ($loop->index + 1) * 100 }}">
                <div class="relative overflow-hidden h-72">
                    @if($project->hero_image)
                        <img src="{{ asset('storage/' . $project->hero_image) }}" alt="{{ $project->title }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center">
                            <svg class="w-20 h-20 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="{{ $badgeColor }} text-white text-xs font-bold px-3 py-1.5 rounded-full">{{ $project->category }}</span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-xl font-display font-bold text-gray-900 mb-3 group-hover:text-[#3B7BF8] transition-colors">
                        {{ $project->title }}
                    </h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-5">{{ Str::limit($project->short_description, 120) }}</p>
                    <a href="{{ route('project.show', $project->slug) }}"
                       class="inline-flex items-center gap-2 text-[#3B7BF8] font-semibold text-sm hover:gap-3 transition-all">
                        Voir le projet →
                    </a>
                </div>
            </article>
            @empty
            <div class="col-span-2 text-center py-10 text-gray-400">Aucun projet en vedette.</div>
            @endforelse
        </div>
    </div>
</section>

<!-- Why Choose Us Component -->
<x-why-choose-us />

<!-- Testimonials Section -->
<section class="py-20 lg:py-28 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <div class="inline-block mb-4">
                <span class="text-[#3B7BF8] text-sm font-bold uppercase tracking-wider">
                    {{ __('home.testimonials.badge') }}
                </span>
            </div>
            <h2 class="text-3xl lg:text-4xl xl:text-5xl font-display font-bold text-gray-900 leading-tight">
                {{ __('home.testimonials.title') }}
            </h2>
        </div>
        
        <!-- Testimonials Carousel -->
        <x-testimonial-carousel :testimonials="[
            [
                'text' => __('home.testimonials.testimonial1.text'),
                'name' => __('home.testimonials.testimonial1.name'),
                'company' => __('home.testimonials.testimonial1.company'),
                'rating' => 5,
                'iconBg' => 'bg-gradient-to-br from-blue-100 to-blue-200',
                'icon' => '<svg class=\'w-6 h-6 text-[#3B7BF8]\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z\'/></svg>'
            ],
            [
                'text' => __('home.testimonials.testimonial2.text'),
                'name' => __('home.testimonials.testimonial2.name'),
                'company' => __('home.testimonials.testimonial2.company'),
                'rating' => 5,
                'iconBg' => 'bg-gradient-to-br from-yellow-100 to-yellow-200',
                'icon' => '<svg class=\'w-6 h-6 text-yellow-600\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253\'/></svg>'
            ],
            [
                'text' => __('home.testimonials.testimonial3.text'),
                'name' => __('home.testimonials.testimonial3.name'),
                'company' => __('home.testimonials.testimonial3.company'),
                'rating' => 5,
                'iconBg' => 'bg-gradient-to-br from-green-100 to-green-200',
                'icon' => '<svg class=\'w-6 h-6 text-green-600\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9\'/></svg>'
            ],
            [
                'text' => __('home.testimonials.testimonial1.text'),
                'name' => __('home.testimonials.testimonial1.name'),
                'company' => __('home.testimonials.testimonial1.company'),
                'rating' => 5,
                'iconBg' => 'bg-gradient-to-br from-purple-100 to-purple-200',
                'icon' => '<svg class=\'w-6 h-6 text-purple-600\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\'/></svg>'
            ],
            [
                'text' => __('home.testimonials.testimonial2.text'),
                'name' => __('home.testimonials.testimonial2.name'),
                'company' => __('home.testimonials.testimonial2.company'),
                'rating' => 5,
                'iconBg' => 'bg-gradient-to-br from-red-100 to-red-200',
                'icon' => '<svg class=\'w-6 h-6 text-red-600\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z\'/></svg>'
            ],
            [
                'text' => __('home.testimonials.testimonial3.text'),
                'name' => __('home.testimonials.testimonial3.name'),
                'company' => __('home.testimonials.testimonial3.company'),
                'rating' => 5,
                'iconBg' => 'bg-gradient-to-br from-indigo-100 to-indigo-200',
                'icon' => '<svg class=\'w-6 h-6 text-indigo-600\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M13 10V3L4 14h7v7l9-11h-7z\'/></svg>'
            ]
        ]" />
    </div>
</section>

<!-- Blog Section -->
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-16" data-aos="fade-up">
            <div class="max-w-2xl">
                <div class="inline-block mb-4">
                    <span class="text-[#3B7BF8] text-sm font-bold uppercase tracking-wider">
                        {{ __('home.blog.badge') }}
                    </span>
                </div>
                <h2 class="text-3xl lg:text-4xl xl:text-5xl font-display font-bold text-gray-900 leading-tight">
                    {{ __('home.blog.title') }}
                </h2>
            </div>
            <a href="{{ route('blog') }}" class="inline-flex items-center gap-2 bg-[#3B7BF8] text-white text-base font-semibold px-8 py-4 rounded-full hover:bg-[#2563EB] hover:-translate-y-0.5 transition-all shadow-lg shadow-blue-500/30 self-start lg:self-auto">
                {{ __('home.blog.cta') }} →
            </a>
        </div>
        
        <!-- Blog Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse($recentBlogs as $blog)
            <article class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group"
                     data-aos="fade-up" data-aos-delay="{{ ($loop->index + 1) * 100 }}">
                <a href="{{ route('blog.single', $blog->slug) }}" class="block relative h-56 overflow-hidden">
                    @if($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center">
                            <svg class="w-14 h-14 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                            </svg>
                        </div>
                    @endif
                </a>
                <div class="p-6">
                    <div class="text-gray-400 text-xs font-medium mb-3">
                        {{ $blog->published_at ? $blog->published_at->format('d M Y') : '' }}
                    </div>
                    <h3 class="text-lg font-display font-bold text-gray-900 leading-tight group-hover:text-[#3B7BF8] transition-colors">
                        <a href="{{ route('blog.single', $blog->slug) }}">{{ $blog->title }}</a>
                    </h3>
                </div>
            </article>
            @empty
            <div class="col-span-3 text-center py-10 text-gray-400">Aucun article disponible.</div>
            @endforelse
        </div>
    </div>
</section>

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
