@extends('layouts.app')

@section('title', __('realizations.title'))

@section('content')
<!-- Hero Section -->
<section class="relative py-20 lg:py-32 bg-gradient-to-br from-gray-50 to-white overflow-hidden">
    <!-- Subtle Grid Pattern Background -->
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: repeating-linear-gradient(0deg, #000 0px, #000 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #000 0px, #000 1px, transparent 1px, transparent 40px);"></div>
    
    <!-- Decorative Elements -->
    <div class="absolute top-20 right-10 w-32 h-32 bg-blue-200 rounded-2xl opacity-50"></div>
    <div class="absolute top-40 right-32 w-24 h-24 bg-blue-300 rounded-2xl opacity-30"></div>
    <div class="absolute bottom-20 right-20 w-40 h-40 bg-blue-200 rounded-2xl opacity-40"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto">
            <!-- Title -->
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-display font-extrabold text-gray-900 mb-6" data-aos="fade-up">
                {{ __('realizations.hero.title') }}
            </h1>
            
            <!-- Breadcrumb -->
            <div class="flex items-center justify-center gap-2 text-sm" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('home') }}" class="text-[#3B7BF8] hover:underline">
                    {{ __('realizations.breadcrumb.home') }}
                </a>
                <span class="text-gray-400">/</span>
                <span class="text-gray-600">{{ __('realizations.breadcrumb.realizations') }}</span>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section with Tabs -->
<section class="py-20 lg:py-28 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Tabs Navigation -->
        <div class="flex flex-wrap items-center justify-center gap-3 mb-16" data-aos="fade-up">
            <button class="tab-btn active px-6 py-3 rounded-full text-sm font-semibold transition-all duration-300 bg-[#3B7BF8] text-white shadow-lg" data-category="all">
                Tous
            </button>
            @foreach($categories as $cat)
            <button class="tab-btn px-6 py-3 rounded-full text-sm font-semibold transition-all duration-300 bg-gray-100 text-gray-700 hover:bg-gray-200" data-category="{{ Str::slug($cat) }}">
                {{ $cat }}
            </button>
            @endforeach
        </div>

        <!-- Projects Grid -->
        <div id="projects-grid" class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            @forelse($projects as $project)
            @php
                $categoryColors = [
                    'Automatisation & Agent IA' => 'bg-[#3B7BF8]',
                    'Création De Site Web'       => 'bg-green-500',
                    'Marketing Digital'          => 'bg-purple-500',
                    'Conception Graphique'       => 'bg-yellow-500',
                ];
                $badgeColor = $categoryColors[$project->category] ?? 'bg-gray-500';
                $delay = $loop->index * 100;
            @endphp
            <div class="project-card bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group"
                 data-category="{{ Str::slug($project->category) }}"
                 data-aos="fade-up" data-aos-delay="{{ $delay }}">
                <div class="relative overflow-hidden h-80">
                    @if($project->hero_image)
                        <img src="{{ asset('storage/' . $project->hero_image) }}"
                             alt="{{ $project->title }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center">
                            <svg class="w-20 h-20 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="{{ $badgeColor }} text-white text-xs font-bold px-4 py-2 rounded-full">{{ $project->category }}</span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-display font-bold text-gray-900 mb-3 group-hover:text-[#3B7BF8] transition-colors">
                        {{ $project->title }}
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        {{ $project->short_description }}
                    </p>
                    <a href="{{ route('project.show', $project->slug) }}" class="inline-flex items-center gap-2 text-[#3B7BF8] font-semibold text-sm hover:gap-3 transition-all">
                        Voir le projet →
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-2 text-center py-20 text-gray-400">
                <p class="text-lg">Aucun projet disponible pour le moment.</p>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($projects->hasPages())
        <div class="mt-12 flex justify-center">
            {{ $projects->links() }}
        </div>
        @endif
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 lg:py-28 bg-gradient-to-br from-[#3B7BF8] to-[#2563EB] relative overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background-image: repeating-linear-gradient(0deg, #fff 0px, #fff 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #fff 0px, #fff 1px, transparent 1px, transparent 40px);"></div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h2 class="text-3xl lg:text-4xl xl:text-5xl font-display font-bold text-white mb-6" data-aos="fade-up">
            Prêt à Lancer Votre Projet ?
        </h2>
        <p class="text-white/90 text-lg mb-10" data-aos="fade-up" data-aos-delay="100">
            Discutons de vos besoins et créons ensemble quelque chose d'exceptionnel
        </p>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-white text-[#3B7BF8] text-base font-semibold px-10 py-5 rounded-full hover:bg-gray-100 hover:-translate-y-1 transition-all shadow-2xl" data-aos="fade-up" data-aos-delay="200">
            Démarrer un projet →
        </a>
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
    
    // Tabs Filtering
    const tabBtns = document.querySelectorAll('.tab-btn');
    const projectCards = document.querySelectorAll('.project-card');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const category = btn.getAttribute('data-category');

            tabBtns.forEach(b => {
                b.classList.remove('active', 'bg-[#3B7BF8]', 'text-white', 'shadow-lg');
                b.classList.add('bg-gray-100', 'text-gray-700');
            });
            btn.classList.add('active', 'bg-[#3B7BF8]', 'text-white', 'shadow-lg');
            btn.classList.remove('bg-gray-100', 'text-gray-700');

            projectCards.forEach(card => {
                const cardCategory = card.getAttribute('data-category');
                if (category === 'all' || cardCategory === category) {
                    card.style.display = 'block';
                    setTimeout(() => { card.style.opacity = '1'; card.style.transform = 'scale(1)'; }, 10);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.9)';
                    setTimeout(() => { card.style.display = 'none'; }, 300);
                }
            });
        });
    });
</script>
@endpush
