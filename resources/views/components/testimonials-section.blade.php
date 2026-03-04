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
