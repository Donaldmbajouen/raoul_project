@extends('layouts.app')

@section('title', $blog->meta_title ?? $blog->title)

@section('content')
<!-- Hero avec image de couverture -->
<section class="relative h-[60vh] lg:h-[70vh] overflow-hidden">
    <div class="absolute inset-0">
        @if($blog->image)
            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                 class="w-full h-full object-cover">
        @else
            <div class="w-full h-full bg-gradient-to-br from-gray-800 to-gray-900"></div>
        @endif
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/70"></div>
    </div>

    <div class="relative z-10 h-full flex items-end">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 w-full">
            <div class="flex items-center gap-2 text-sm mb-6" data-aos="fade-up">
                <a href="{{ route('home') }}" class="text-white/80 hover:text-white transition-colors">Accueil</a>
                <span class="text-white/60">/</span>
                <a href="{{ route('blog') }}" class="text-white/80 hover:text-white transition-colors">Blog</a>
                <span class="text-white/60">/</span>
                <span class="text-white">{{ $blog->title }}</span>
            </div>

            @if($blog->category)
            <div class="mb-4">
                <span class="bg-[#3B7BF8] text-white text-xs font-bold px-4 py-1.5 rounded-full">{{ $blog->category }}</span>
            </div>
            @endif

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-display font-extrabold text-white mb-4 leading-tight" data-aos="fade-up" data-aos-delay="100">
                {{ $blog->title }}
            </h1>

            <div class="flex items-center gap-4 text-white/80 text-sm" data-aos="fade-up" data-aos-delay="200">
                @if($blog->published_at)
                <span>{{ $blog->published_at->format('d M Y') }}</span>
                @endif
                @if($blog->user)
                <span>•</span>
                <span>{{ $blog->user->name }}</span>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Contenu de l'article -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        @if($blog->excerpt)
        <p class="text-xl text-gray-500 leading-relaxed mb-10 font-light border-l-4 border-[#3B7BF8] pl-6" data-aos="fade-up">
            {{ $blog->excerpt }}
        </p>
        @endif

        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed mb-12" data-aos="fade-up">
            {!! $blog->content !!}
        </div>

        @if($blog->tags && count($blog->tags) > 0)
        <div class="flex flex-wrap gap-3 mb-12" data-aos="fade-up">
            @foreach($blog->tags as $tag)
            <span class="px-4 py-2 bg-gray-100 text-gray-700 text-sm font-medium rounded-full hover:bg-gray-200 transition-colors">
                #{{ trim($tag) }}
            </span>
            @endforeach
        </div>
        @endif

        <div class="border-t border-b border-gray-200 py-8 mb-12" data-aos="fade-up">
            <div class="flex items-center justify-between">
                <span class="text-gray-700 font-semibold">Partager cet article</span>
                <div class="flex gap-3">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank"
                       class="w-10 h-10 rounded-full bg-[#3B7BF8] text-white flex items-center justify-center hover:bg-[#2563EB] transition-all hover:scale-110">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($blog->title) }}" target="_blank"
                       class="w-10 h-10 rounded-full bg-[#3B7BF8] text-white flex items-center justify-center hover:bg-[#2563EB] transition-all hover:scale-110">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->url()) }}" target="_blank"
                       class="w-10 h-10 rounded-full bg-[#3B7BF8] text-white flex items-center justify-center hover:bg-[#2563EB] transition-all hover:scale-110">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@if($relatedBlogs->isNotEmpty())
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h3 class="text-2xl lg:text-3xl font-display font-bold text-gray-900 mb-12 text-center" data-aos="fade-up">
            Articles similaires
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($relatedBlogs as $related)
            <article class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group"
                     data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 + 100 }}">
                <a href="{{ route('blog.single', $related->slug) }}" class="block relative h-48 overflow-hidden">
                    @if($related->image)
                        <img src="{{ asset('storage/' . $related->image) }}" alt="{{ $related->title }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-blue-50 to-blue-100"></div>
                    @endif
                </a>
                <div class="p-6">
                    <div class="text-gray-400 text-xs mb-2">{{ $related->published_at ? $related->published_at->format('d M Y') : '' }}</div>
                    <h4 class="text-base font-display font-bold text-gray-900 group-hover:text-[#3B7BF8] transition-colors leading-snug">
                        <a href="{{ route('blog.single', $related->slug) }}">{{ $related->title }}</a>
                    </h4>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection

@push('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init({ duration: 800, easing: 'ease-out', once: true, offset: 100 });</script>
@endpush
