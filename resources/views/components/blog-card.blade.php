@props([
    'title',
    'date',
    'image',
    'delay' => '0'
])

<div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group" 
     data-aos="fade-up" 
     data-aos-delay="{{ $delay }}">
    
    <!-- Image -->
    <div class="relative h-64 overflow-hidden">
        <img src="{{ $image }}" 
             alt="{{ $title }}" 
             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
    </div>
    
    <!-- Content -->
    <div class="p-6">
        <!-- Date -->
        <div class="text-gray-400 text-xs font-medium mb-3">
            {{ $date }}
        </div>
        
        <!-- Title -->
        <h3 class="text-lg font-display font-bold text-gray-900 leading-tight group-hover:text-[#3B7BF8] transition-colors">
            {{ $title }}
        </h3>
    </div>
</div>
