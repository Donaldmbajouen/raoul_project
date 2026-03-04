@props(['title', 'description', 'image', 'delay' => '0', 'link' => '#'])

<div class="group" data-aos="fade-up" data-aos-delay="{{ $delay }}">
    <a href="{{ $link }}" class="block">
        <!-- Card Header with Title and Arrow -->
        <div class="flex items-start justify-between mb-4">
            <h3 class="text-2xl lg:text-3xl font-display font-bold text-gray-900 group-hover:text-[#3B7BF8] transition-colors pr-4">
                {{ $title }}
            </h3>
            <div class="flex-shrink-0 w-14 h-14 rounded-full bg-[#3B7BF8] flex items-center justify-center group-hover:bg-[#2563EB] group-hover:scale-110 transition-all shadow-lg">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7v10"/>
                </svg>
            </div>
        </div>
        
        <!-- Description -->
        <p class="text-gray-600 text-sm leading-relaxed mb-6">
            {{ $description }}
        </p>
        
        <!-- Image -->
        <div class="relative overflow-hidden rounded-3xl shadow-lg group-hover:shadow-2xl transition-all duration-500">
            <img src="{{ $image }}" 
                 alt="{{ $title }}" 
                 class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        </div>
    </a>
</div>
