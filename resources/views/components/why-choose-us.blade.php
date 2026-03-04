<!-- Why Choose Us Section -->
<section class="py-20 lg:py-28 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <div class="inline-block mb-4">
                <span class="text-[#3B7BF8] text-sm font-bold uppercase tracking-wider">
                    {{ __('home.why.badge') }}
                </span>
            </div>
            <h2 class="text-3xl lg:text-4xl xl:text-5xl font-display font-bold text-gray-900 leading-tight">
                {{ __('home.why.title') }}
            </h2>
        </div>
        
        <!-- 3 Features Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <!-- Feature 1 -->
            <div class="bg-white rounded-2xl p-8 text-center hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-blue-50 flex items-center justify-center">
                    <svg class="w-10 h-10 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-display font-bold text-gray-900 mb-4">
                    {{ __('home.why.feature1.title') }}
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    {{ __('home.why.feature1.description') }}
                </p>
            </div>
            
            <!-- Feature 2 -->
            <div class="bg-white rounded-2xl p-8 text-center hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-blue-50 flex items-center justify-center">
                    <svg class="w-10 h-10 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-display font-bold text-gray-900 mb-4">
                    {{ __('home.why.feature2.title') }}
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    {{ __('home.why.feature2.description') }}
                </p>
            </div>
            
            <!-- Feature 3 -->
            <div class="bg-white rounded-2xl p-8 text-center hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-blue-50 flex items-center justify-center">
                    <svg class="w-10 h-10 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-display font-bold text-gray-900 mb-4">
                    {{ __('home.why.feature3.title') }}
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    {{ __('home.why.feature3.description') }}
                </p>
            </div>
        </div>
        
        <!-- Large CTA Card -->
        <div class="bg-white rounded-2xl p-8 lg:p-12 shadow-xl" data-aos="fade-up" data-aos-delay="400">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                <!-- Left Content -->
                <div>
                    <h2 class="text-2xl lg:text-3xl xl:text-4xl font-display font-bold text-gray-900 mb-6 leading-tight">
                        {{ __('home.cta.title') }}
                    </h2>
                    <p class="text-gray-600 text-base leading-relaxed mb-8">
                        {{ __('home.cta.description') }}
                    </p>
                    
                    <!-- Social Links -->
                    <div class="flex flex-wrap gap-4">
                        <a href="#" class="inline-flex items-center gap-2 px-6 py-3 bg-gray-900 text-white text-sm font-semibold rounded-full hover:bg-gray-800 transition-all">
                            Facebook →
                        </a>
                        <a href="#" class="inline-flex items-center gap-2 px-6 py-3 bg-gray-900 text-white text-sm font-semibold rounded-full hover:bg-gray-800 transition-all">
                            LinkedIn →
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-gray-900 text-white text-sm font-semibold rounded-full hover:bg-gray-800 transition-all">
                            {{ __('home.cta.contact') }} →
                        </a>
                    </div>
                </div>
                
                <!-- Right Icon -->
                <div class="flex justify-center lg:justify-end">
                    <div class="w-48 h-48 rounded-full bg-gradient-to-br from-blue-50 to-blue-100 flex items-center justify-center">
                        <svg class="w-24 h-24 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
