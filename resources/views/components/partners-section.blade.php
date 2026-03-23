@if($partners->isNotEmpty())
<!-- Partners Section -->
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <div class="inline-block mb-4">
                <span class="text-[#3B7BF8] text-sm font-bold uppercase tracking-wider">
                    {{ __('home.partners.badge') }}
                </span>
            </div>
            <h2 class="text-3xl lg:text-4xl xl:text-5xl font-display font-bold text-gray-900 leading-tight">
                {{ __('home.partners.title') }}
            </h2>
        </div>

        <!-- Partners Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 lg:gap-8">
            @foreach($partners as $index => $partner)
            @php $delay = 100 + ($index % 4) * 50; @endphp

            @if($partner->link)
            <a href="{{ $partner->link }}" target="_blank" rel="noopener noreferrer"
               class="bg-gray-50 rounded-2xl p-8 flex items-center justify-center hover:shadow-lg transition-all duration-300 group"
               data-aos="fade-up" data-aos-delay="{{ $delay }}" title="{{ $partner->name }}">
            @else
            <div class="bg-gray-50 rounded-2xl p-8 flex items-center justify-center hover:shadow-lg transition-all duration-300 group"
                 data-aos="fade-up" data-aos-delay="{{ $delay }}">
            @endif

                @if($partner->logo)
                    <img src="{{ asset('storage/' . $partner->logo) }}"
                         alt="{{ $partner->name }}"
                         class="max-h-14 max-w-full object-contain opacity-60 group-hover:opacity-100 transition-opacity duration-300">
                @else
                    <span class="text-lg font-bold text-gray-300 group-hover:text-[#3B7BF8] transition-colors text-center">
                        {{ $partner->name }}
                    </span>
                @endif

            @if($partner->link)
            </a>
            @else
            </div>
            @endif

            @endforeach
        </div>
    </div>
</section>
@endif
