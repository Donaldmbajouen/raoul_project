@extends('layouts.app')

@section('title', __('blog.single.title'))

@section('content')
<!-- Hero Section with Image -->
<section class="relative h-[60vh] lg:h-[70vh] overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?q=80&w=1600&auto=format&fit=crop" 
             alt="Blog Hero" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/70"></div>
    </div>
    
    <!-- Content -->
    <div class="relative z-10 h-full flex items-end">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 w-full">
            <!-- Breadcrumb -->
            <div class="flex items-center gap-2 text-sm mb-6" data-aos="fade-up">
                <a href="{{ route('home') }}" class="text-white/80 hover:text-white transition-colors">
                    {{ __('blog.breadcrumb.home') }}
                </a>
                <span class="text-white/60">/</span>
                <a href="{{ route('blog') }}" class="text-white/80 hover:text-white transition-colors">
                    {{ __('blog.breadcrumb.blog') }}
                </a>
                <span class="text-white/60">/</span>
                <span class="text-white">{{ __('blog.single.breadcrumb') }}</span>
            </div>
            
            <!-- Title -->
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-display font-extrabold text-white mb-4 leading-tight" data-aos="fade-up" data-aos-delay="100">
                {{ __('blog.single.article_title') }}
            </h1>
            
            <!-- Meta -->
            <div class="flex items-center gap-4 text-white/80 text-sm" data-aos="fade-up" data-aos-delay="200">
                <span>{{ __('blog.single.date') }}</span>
                <span>•</span>
                <span>{{ __('blog.single.author') }}</span>
            </div>
        </div>
    </div>
</section>

<!-- Article Content -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Introduction -->
        <div class="prose prose-lg max-w-none mb-12" data-aos="fade-up">
            <p class="text-gray-600 leading-relaxed">
                {{ __('blog.single.intro1') }}
            </p>
            <p class="text-gray-600 leading-relaxed">
                {{ __('blog.single.intro2') }}
            </p>
        </div>
        
        <!-- Section Title -->
        <h2 class="text-2xl lg:text-3xl font-display font-bold text-gray-900 mb-6" data-aos="fade-up">
            {{ __('blog.single.section1_title') }}
        </h2>
        
        <!-- Section Content -->
        <div class="prose prose-lg max-w-none mb-12" data-aos="fade-up">
            <p class="text-gray-600 leading-relaxed mb-6">
                {{ __('blog.single.section1_content') }}
            </p>
        </div>
        
        <!-- Quote Block -->
        <div class="bg-blue-50 border-l-4 border-[#3B7BF8] p-8 my-12 rounded-r-2xl" data-aos="fade-up">
            <div class="flex items-start gap-4">
                <svg class="w-8 h-8 text-[#3B7BF8] flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                </svg>
                <p class="text-lg text-gray-700 italic font-medium">
                    {{ __('blog.single.quote') }}
                </p>
            </div>
        </div>
        
        <!-- List Section -->
        <h3 class="text-xl lg:text-2xl font-display font-bold text-gray-900 mb-6" data-aos="fade-up">
            {{ __('blog.single.list_title') }}
        </h3>
        
        <ul class="space-y-4 mb-12" data-aos="fade-up">
            @foreach(['point1', 'point2', 'point3', 'point4', 'point5'] as $point)
            <li class="flex items-start gap-3">
                <div class="w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0 mt-0.5">
                    <svg class="w-3.5 h-3.5 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <span class="text-gray-600 leading-relaxed">{{ __('blog.single.' . $point) }}</span>
            </li>
            @endforeach
        </ul>
        
        <!-- Conclusion -->
        <div class="prose prose-lg max-w-none mb-12" data-aos="fade-up">
            <p class="text-gray-600 leading-relaxed">
                {{ __('blog.single.conclusion') }}
            </p>
        </div>
        
        <!-- Tags -->
        <div class="flex flex-wrap gap-3 mb-12" data-aos="fade-up">
            <span class="px-4 py-2 bg-gray-100 text-gray-700 text-sm font-medium rounded-full hover:bg-gray-200 transition-colors cursor-pointer">
                {{ __('blog.single.tag1') }}
            </span>
            <span class="px-4 py-2 bg-gray-100 text-gray-700 text-sm font-medium rounded-full hover:bg-gray-200 transition-colors cursor-pointer">
                {{ __('blog.single.tag2') }}
            </span>
            <span class="px-4 py-2 bg-gray-100 text-gray-700 text-sm font-medium rounded-full hover:bg-gray-200 transition-colors cursor-pointer">
                {{ __('blog.single.tag3') }}
            </span>
        </div>
        
        <!-- Share Buttons -->
        <div class="border-t border-b border-gray-200 py-8 mb-12" data-aos="fade-up">
            <div class="flex items-center justify-between">
                <span class="text-gray-700 font-semibold">{{ __('blog.single.share') }}</span>
                <div class="flex gap-3">
                    <a href="#" class="w-10 h-10 rounded-full bg-[#3B7BF8] text-white flex items-center justify-center hover:bg-[#2563EB] transition-all hover:scale-110">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-[#3B7BF8] text-white flex items-center justify-center hover:bg-[#2563EB] transition-all hover:scale-110">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-[#3B7BF8] text-white flex items-center justify-center hover:bg-[#2563EB] transition-all hover:scale-110">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comment Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h3 class="text-2xl lg:text-3xl font-display font-bold text-gray-900 mb-8" data-aos="fade-up">
            {{ __('blog.single.comments_title') }}
        </h3>
        
        <!-- Comment Form -->
        <form class="space-y-6" data-aos="fade-up">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('blog.single.comment_label') }}</label>
                <textarea rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent resize-none" placeholder="{{ __('blog.single.comment_placeholder') }}"></textarea>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('blog.single.name_label') }}</label>
                    <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent" placeholder="{{ __('blog.single.name_placeholder') }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('blog.single.email_label') }}</label>
                    <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent" placeholder="{{ __('blog.single.email_placeholder') }}">
                </div>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">{{ __('blog.single.website_label') }}</label>
                <input type="url" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent" placeholder="{{ __('blog.single.website_placeholder') }}">
            </div>
            
            <div class="flex items-start gap-3">
                <input type="checkbox" id="save-info" class="mt-1 w-4 h-4 text-[#3B7BF8] border-gray-300 rounded focus:ring-[#3B7BF8]">
                <label for="save-info" class="text-sm text-gray-600">{{ __('blog.single.save_info') }}</label>
            </div>
            
            <button type="submit" class="inline-flex items-center gap-2 bg-[#3B7BF8] text-white text-base font-semibold px-8 py-4 rounded-full hover:bg-[#2563EB] hover:-translate-y-0.5 transition-all shadow-lg shadow-blue-500/30">
                {{ __('blog.single.submit_comment') }}
            </button>
        </form>
    </div>
</section>

<!-- Related Articles -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h3 class="text-2xl lg:text-3xl font-display font-bold text-gray-900 mb-12 text-center" data-aos="fade-up">
            {{ __('blog.single.related_title') }}
        </h3>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <x-blog-card 
                :title="__('blog.article1.title')"
                :date="__('blog.article1.date')"
                image="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=800&auto=format&fit=crop"
                delay="100"
            />
            
            <x-blog-card 
                :title="__('blog.article2.title')"
                :date="__('blog.article2.date')"
                image="https://images.unsplash.com/photo-1553877522-43269d4ea984?q=80&w=800&auto=format&fit=crop"
                delay="200"
            />
            
            <x-blog-card 
                :title="__('blog.article3.title')"
                :date="__('blog.article3.date')"
                image="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=800&auto=format&fit=crop"
                delay="300"
            />
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
