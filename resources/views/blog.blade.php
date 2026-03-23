@extends('layouts.app')

@section('title', __('blog.title'))

@section('content')
<!-- Hero Section -->
<section class="relative py-20 lg:py-32 bg-gradient-to-br from-gray-50 to-white overflow-hidden">
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: repeating-linear-gradient(0deg, #000 0px, #000 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #000 0px, #000 1px, transparent 1px, transparent 40px);"></div>
    <div class="absolute top-20 right-10 w-32 h-32 bg-gray-200 rounded-2xl opacity-50"></div>
    <div class="absolute top-40 right-32 w-24 h-24 bg-gray-300 rounded-2xl opacity-30"></div>
    <div class="absolute bottom-20 right-20 w-40 h-40 bg-gray-200 rounded-2xl opacity-40"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-display font-extrabold text-gray-900 mb-6" data-aos="fade-up">
                {{ __('blog.hero.title') }}
            </h1>
            <div class="flex items-center justify-center gap-2 text-sm" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('home') }}" class="text-[#3B7BF8] hover:underline">{{ __('blog.breadcrumb.home') }}</a>
                <span class="text-gray-400">/</span>
                <span class="text-gray-600">{{ __('blog.breadcrumb.blog') }}</span>
            </div>
        </div>
    </div>
</section>

<!-- Blog Grid Section -->
<section class="py-20 lg:py-28 bg-white relative">
    <div class="absolute inset-0 opacity-[0.02]" style="background-image: repeating-linear-gradient(0deg, #000 0px, #000 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #000 0px, #000 1px, transparent 1px, transparent 40px);"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        {{-- Filtre catégories --}}
        @if($categories->isNotEmpty())
        <div class="flex flex-wrap items-center justify-center gap-3 mb-12" data-aos="fade-up">
            <a href="{{ route('blog') }}"
               class="px-5 py-2 rounded-full text-sm font-semibold transition-all {{ !request('category') ? 'bg-[#3B7BF8] text-white shadow-lg' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                Tous
            </a>
            @foreach($categories as $cat)
            <a href="{{ route('blog', ['category' => $cat]) }}"
               class="px-5 py-2 rounded-full text-sm font-semibold transition-all {{ request('category') === $cat ? 'bg-[#3B7BF8] text-white shadow-lg' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                {{ $cat }}
            </a>
            @endforeach
        </div>
        @endif

        {{-- Grille articles --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($blogs as $blog)
            @php $delay = ($loop->index % 3 + 1) * 100; @endphp
            <article class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group flex flex-col"
                     data-aos="fade-up" data-aos-delay="{{ $delay }}">
                <a href="{{ route('blog.single', $blog->slug) }}" class="block relative h-56 overflow-hidden">
                    @if($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center">
                            <svg class="w-16 h-16 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                            </svg>
                        </div>
                    @endif
                    @if($blog->category)
                    <div class="absolute top-4 left-4">
                        <span class="bg-[#3B7BF8] text-white text-xs font-bold px-3 py-1 rounded-full">{{ $blog->category }}</span>
                    </div>
                    @endif
                </a>

                <div class="p-6 flex flex-col flex-1">
                    <div class="text-gray-400 text-xs font-medium mb-3">
                        {{ $blog->published_at ? $blog->published_at->format('d M Y') : '' }}
                    </div>
                    <h3 class="text-lg font-display font-bold text-gray-900 leading-tight group-hover:text-[#3B7BF8] transition-colors mb-3">
                        <a href="{{ route('blog.single', $blog->slug) }}">{{ $blog->title }}</a>
                    </h3>
                    @if($blog->excerpt)
                    <p class="text-gray-500 text-sm leading-relaxed mb-4 flex-1">{{ Str::limit($blog->excerpt, 120) }}</p>
                    @endif
                    <a href="{{ route('blog.single', $blog->slug) }}"
                       class="inline-flex items-center gap-1 text-[#3B7BF8] text-sm font-semibold hover:gap-2 transition-all mt-auto">
                        Lire la suite →
                    </a>
                </div>
            </article>
            @empty
            <div class="col-span-3 text-center py-20 text-gray-400">
                <p class="text-lg">Aucun article disponible pour le moment.</p>
            </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        @if($blogs->hasPages())
        <div class="mt-12 flex justify-center">
            {{ $blogs->links() }}
        </div>
        @endif
    </div>
</section>

<x-why-choose-us />
<x-partners-section />
@endsection

@push('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init({ duration: 800, easing: 'ease-out', once: true, offset: 100 });</script>
@endpush
