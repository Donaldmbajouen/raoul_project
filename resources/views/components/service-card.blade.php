@props([
    'title',
    'description',
    'image',
    'delay' => '0'
])

<div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 group" 
     data-aos="fade-up" 
     data-aos-delay="{{ $delay }}">
    
    <!-- Header: Title + Icon -->
    <div class="flex items-start justify-between mb-6">
        <h3 class="text-2xl lg:text-3xl font-display font-bold text-heading leading-tight pr-4">
            {{ $title }}
        </h3>
        <div class="w-16 h-16 rounded-full bg-primary flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"/>
            </svg>
        </div>
    </div>
    
    <!-- Separator -->
    <div class="w-full h-px bg-gray-200 mb-6"></div>
    
    <!-- Description -->
    <p class="text-body text-base leading-relaxed mb-8">
        {{ $description }}
    </p>
    
    <!-- Image -->
    <div class="relative overflow-hidden rounded-3xl">
        <img src="{{ $image }}" 
             alt="{{ $title }}" 
             class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
    </div>
</div>
