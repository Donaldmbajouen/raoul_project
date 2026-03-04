@props([
    'title',
    'description',
    'image',
    'delay' => '0'
])

<div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group" 
     data-aos="fade-up" 
     data-aos-delay="{{ $delay }}">
    
    <!-- Image -->
    <div class="relative h-80 overflow-hidden">
        <img src="{{ $image }}" 
             alt="{{ $title }}" 
             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
    </div>
    
    <!-- Content -->
    <div class="p-8">
        <h3 class="text-2xl font-display font-bold text-gray-900 mb-4 leading-tight">
            {{ $title }}
        </h3>
        <p class="text-gray-600 text-base leading-relaxed">
            {{ $description }}
        </p>
    </div>
</div>
