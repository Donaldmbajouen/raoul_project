@props(['testimonials'])

@php
    // Group testimonials into slides of 3
    $slides = array_chunk($testimonials, 3);
@endphp

<div class="relative">
    <!-- Carousel Container -->
    <div class="overflow-hidden">
        <div id="testimonials-track" class="flex transition-transform duration-500 ease-out">
            @foreach($slides as $slideIndex => $slideTestimonials)
            <div class="min-w-full">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach($slideTestimonials as $testimonial)
                    <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300">
                        <!-- Stars -->
                        <div class="flex gap-1 mb-6">
                            @for($i = 0; $i < ($testimonial['rating'] ?? 5); $i++)
                            <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                            </svg>
                            @endfor
                        </div>
                        
                        <!-- Quote Icon -->
                        <div class="mb-4">
                            <svg class="w-8 h-8 text-[#3B7BF8] opacity-20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                            </svg>
                        </div>
                        
                        <!-- Testimonial Text -->
                        <p class="text-gray-600 text-sm leading-relaxed mb-8">
                            {{ $testimonial['text'] }}
                        </p>
                        
                        <!-- Client Info -->
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full {{ $testimonial['iconBg'] ?? 'bg-gradient-to-br from-blue-100 to-blue-200' }} flex items-center justify-center flex-shrink-0">
                                {!! $testimonial['icon'] ?? '<svg class="w-6 h-6 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>' !!}
                            </div>
                            <div>
                                <div class="font-bold text-gray-900 text-sm">{{ $testimonial['name'] }}</div>
                                <div class="text-gray-500 text-xs">{{ $testimonial['company'] }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    <!-- Navigation Arrows -->
    <button id="prev-testimonial" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 lg:-translate-x-16 bg-white text-gray-800 p-4 rounded-full shadow-xl hover:bg-[#3B7BF8] hover:text-white transition-all duration-300 z-10 hover:scale-110">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
    </button>
    
    <button id="next-testimonial" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 lg:translate-x-16 bg-white text-gray-800 p-4 rounded-full shadow-xl hover:bg-[#3B7BF8] hover:text-white transition-all duration-300 z-10 hover:scale-110">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
    </button>
    
    <!-- Dots Indicator -->
    <div class="flex justify-center gap-2 mt-8">
        @foreach($slides as $index => $slide)
        <button class="testimonial-dot w-2.5 h-2.5 rounded-full transition-all duration-300 {{ $index === 0 ? 'bg-[#3B7BF8] w-8' : 'bg-gray-300' }}" data-index="{{ $index }}"></button>
        @endforeach
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const track = document.getElementById('testimonials-track');
    const prevBtn = document.getElementById('prev-testimonial');
    const nextBtn = document.getElementById('next-testimonial');
    const dots = document.querySelectorAll('.testimonial-dot');
    const totalSlides = {{ count($slides) }};
    let currentIndex = 0;
    
    function updateCarousel() {
        track.style.transform = `translateX(-${currentIndex * 100}%)`;
        
        // Update dots
        dots.forEach((dot, index) => {
            if (index === currentIndex) {
                dot.classList.add('bg-[#3B7BF8]', 'w-8');
                dot.classList.remove('bg-gray-300');
            } else {
                dot.classList.remove('bg-[#3B7BF8]', 'w-8');
                dot.classList.add('bg-gray-300');
            }
        });
    }
    
    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateCarousel();
    });
    
    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateCarousel();
    });
    
    dots.forEach(dot => {
        dot.addEventListener('click', () => {
            currentIndex = parseInt(dot.dataset.index);
            updateCarousel();
        });
    });
    
    // Auto-play (optional)
    setInterval(() => {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateCarousel();
    }, 5000);
});
</script>
