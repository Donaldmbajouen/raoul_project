@extends('layouts.app')
@section('title', $service->title)

@php
$icons = [
    'reseaux-informatiques'  => 'M5 12H3m2 0a2 2 0 100-4 2 2 0 000 4zm0 0a2 2 0 100 4 2 2 0 000-4m16-4h-2m2 0a2 2 0 100-4 2 2 0 000 4zm0 0a2 2 0 100 4 2 2 0 000-4M12 6V4m0 2a2 2 0 100-4 2 2 0 000 4zm0 0v12m0 2a2 2 0 100-4 2 2 0 000 4zm0-2v-2',
    'serveurs'               => 'M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01',
    'cloud-hebergement'      => 'M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z',
    'telecom-iot'            => 'M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0',
    'data-ia'                => 'M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18',
    'integration-api'        => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',
    'agents-ia'              => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
    'ia-automatisation'      => 'M13 10V3L4 14h7v7l9-11h-7z',
    'reseaux-internet'       => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9',
    'logiciels-gestion'      => 'M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2',
    'formation-informatique' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
    'conseils-audit'         => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4',
];
$bgImages = [
    'reseaux-informatiques'  => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=1600&auto=format&fit=crop',
    'serveurs'               => 'https://images.unsplash.com/photo-1597852074816-d933c7d2b988?q=80&w=1600&auto=format&fit=crop',
    'cloud-hebergement'      => 'https://images.unsplash.com/photo-1544197150-b99a580bb7a8?q=80&w=1600&auto=format&fit=crop',
    'telecom-iot'            => 'https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=1600&auto=format&fit=crop',
    'data-ia'                => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?q=80&w=1600&auto=format&fit=crop',
    'integration-api'        => 'https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?q=80&w=1600&auto=format&fit=crop',
    'agents-ia'              => 'https://images.unsplash.com/photo-1620712943543-bcc4688e7485?q=80&w=1600&auto=format&fit=crop',
    'ia-automatisation'      => 'https://images.unsplash.com/photo-1485827404703-89b55fcc595e?q=80&w=1600&auto=format&fit=crop',
    'reseaux-internet'       => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=1600&auto=format&fit=crop',
    'logiciels-gestion'      => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1600&auto=format&fit=crop',
    'formation-informatique' => 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=1600&auto=format&fit=crop',
    'conseils-audit'         => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=1600&auto=format&fit=crop',
];
$icon    = $icons[$service->slug]    ?? $icons['integration-api'];
$bgImage = $bgImages[$service->slug] ?? 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1600&auto=format&fit=crop';
$catLabel = $service->category === 'SR' ? 'Services Rapides' : 'Gestion Longue';
@endphp

@section('content')

{{-- HERO --}}
<section class="relative min-h-[70vh] flex items-center justify-center overflow-hidden bg-black">
    <div class="absolute inset-0 bg-cover bg-center opacity-30" style="background-image:url('{{ $bgImage }}');"></div>
    <div class="absolute inset-0 bg-gradient-to-br from-black/80 via-black/60 to-blue-900/30"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 text-center">
        <div class="flex items-center justify-center gap-2 text-sm text-white/60 mb-8" data-aos="fade-down">
            <a href="{{ route('home') }}" class="hover:text-white transition-colors">Accueil</a>
            <span>/</span>
            <a href="{{ route('services') }}" class="hover:text-white transition-colors">Services</a>
            <span>/</span>
            <span class="text-white/90">{{ $service->title }}</span>
        </div>
        <div class="inline-flex items-center justify-center w-20 h-20 rounded-2xl bg-blue-500/20 border border-blue-500/40 backdrop-blur-md mb-6" data-aos="fade-up">
            <svg class="w-10 h-10 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $icon }}"/>
            </svg>
        </div>
        <div class="mb-4" data-aos="fade-up" data-aos-delay="50">
            <span class="text-xs font-bold uppercase tracking-widest text-blue-400 bg-blue-500/10 border border-blue-500/30 px-4 py-1.5 rounded-full">
                {{ $catLabel }}
            </span>
        </div>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-display font-extrabold text-white mb-6 leading-tight" data-aos="fade-up" data-aos-delay="100">
            {{ $service->title }}
        </h1>
        <p class="text-lg text-white/80 max-w-2xl mx-auto mb-10" data-aos="fade-up" data-aos-delay="200">
            {{ $service->short_description }}
        </p>
        <div class="flex flex-wrap items-center justify-center gap-4" data-aos="fade-up" data-aos-delay="300">
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-blue-600 text-white font-semibold px-8 py-4 rounded-full hover:bg-blue-700 transition-all shadow-xl">
                Demander un devis &rarr;
            </a>
            @if($service->base_price)
            <span class="inline-flex items-center gap-2 bg-white/10 border border-white/20 text-white font-semibold px-6 py-4 rounded-full backdrop-blur-md">
                A partir de {{ number_format($service->base_price, 0, ',', ' ') }} FCFA
            </span>
            @endif
        </div>
    </div>
</section>

{{-- DESCRIPTION --}}
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right" data-aos-duration="1000">
                <span class="text-blue-600 text-sm font-bold uppercase tracking-wider">A propos de ce service</span>
                <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 mt-3 mb-6 leading-tight">
                    Pourquoi choisir {{ $service->title }} ?
                </h2>
                <div class="prose prose-lg text-gray-600 max-w-none">
                    {!! $service->full_description !!}
                </div>
            </div>
            <div class="relative" data-aos="fade-left" data-aos-duration="1000">
                <div class="rounded-3xl overflow-hidden shadow-2xl">
                    <img src="{{ $bgImage }}" alt="{{ $service->title }}" class="w-full h-80 object-cover">
                </div>
                @if($service->base_price)
                <div class="absolute -bottom-6 -left-6 bg-blue-600 text-white rounded-2xl px-6 py-4 shadow-2xl">
                    <p class="text-xs font-semibold opacity-80 uppercase tracking-wider">A partir de</p>
                    <p class="text-2xl font-extrabold">{{ number_format($service->base_price, 0, ',', ' ') }} <span class="text-sm font-normal">FCFA</span></p>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

{{-- AVANTAGES --}}
@if($service->advantages && count($service->advantages) > 0)
<section class="py-20 lg:py-28 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16" data-aos="fade-up">
            <span class="text-blue-600 text-sm font-bold uppercase tracking-wider">Ce que vous gagnez</span>
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 mt-3 leading-tight">Les avantages cles</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($service->advantages as $i => $adv)
            <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group" data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">
                <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center mb-4 group-hover:bg-blue-600 transition-colors">
                    <svg class="w-6 h-6 text-blue-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $adv['title'] ?? $adv }}</h3>
                @if(isset($adv['description']))
                <p class="text-sm text-gray-500 leading-relaxed">{{ $adv['description'] }}</p>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- PROCESSUS --}}
@if($service->process_steps && count($service->process_steps) > 0)
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16" data-aos="fade-up">
            <span class="text-blue-600 text-sm font-bold uppercase tracking-wider">Comment ca marche</span>
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 mt-3 leading-tight">Notre processus</h2>
        </div>
        <div class="relative">
            <div class="hidden lg:block absolute top-10 left-0 right-0 h-0.5 bg-gradient-to-r from-transparent via-blue-200 to-transparent"></div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($service->process_steps as $i => $step)
                <div class="relative text-center" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                    <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-blue-600 text-white text-2xl font-extrabold shadow-xl mb-6 relative z-10">
                        {{ $step['number'] ?? $i + 1 }}
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $step['title'] ?? '' }}</h3>
                    @if(isset($step['description']))
                    <p class="text-sm text-gray-500 leading-relaxed max-w-xs mx-auto">{{ $step['description'] }}</p>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif

{{-- FAQ --}}
@if($service->faq && count($service->faq) > 0)
<section class="py-20 lg:py-28 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-blue-600 text-sm font-bold uppercase tracking-wider">On repond a vos questions</span>
            <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 mt-3 leading-tight">Questions frequentes</h2>
        </div>
        <div class="space-y-4">
            @foreach($service->faq as $i => $item)
            <details class="group bg-white rounded-2xl shadow-sm overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">
                <summary class="flex items-center justify-between px-6 py-5 cursor-pointer list-none font-semibold text-gray-900 hover:text-blue-600 transition-colors">
                    <span>{{ $item['question'] ?? $item }}</span>
                    <svg class="w-5 h-5 text-blue-600 flex-shrink-0 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </summary>
                @if(isset($item['answer']))
                <div class="px-6 pb-5 text-gray-600 leading-relaxed border-t border-gray-100 pt-4">{{ $item['answer'] }}</div>
                @endif
            </details>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- AUTRES SERVICES --}}
@php
    $others = \App\Models\Service::where('is_active', true)->where('slug', '!=', $service->slug)->inRandomOrder()->limit(3)->get();
@endphp
@if($others->count() > 0)
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12" data-aos="fade-up">
            <span class="text-blue-600 text-sm font-bold uppercase tracking-wider">Explorez aussi</span>
            <h2 class="text-3xl font-display font-bold text-gray-900 mt-3">Autres services</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($others as $i => $other)
            @php $otherIcon = $icons[$other->slug] ?? $icons['integration-api']; @endphp
            <a href="{{ route('services.show', $other->slug) }}"
               class="group bg-gray-50 rounded-2xl p-6 hover:bg-blue-600 hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
               data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center mb-4 shadow-sm group-hover:bg-white/20 transition-colors">
                    <svg class="w-6 h-6 text-blue-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $otherIcon }}"/>
                    </svg>
                </div>
                <span class="text-xs font-bold uppercase tracking-wider text-blue-600 group-hover:text-white/70 transition-colors">
                    {{ $other->category === 'SR' ? 'Services Rapides' : 'Gestion Longue' }}
                </span>
                <h3 class="text-lg font-bold text-gray-900 group-hover:text-white mt-2 mb-2 transition-colors">{{ $other->title }}</h3>
                <p class="text-sm text-gray-500 group-hover:text-white/80 line-clamp-2 transition-colors">{{ $other->short_description }}</p>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- CTA FINAL --}}
<section class="py-24 bg-gradient-to-br from-gray-900 via-black to-blue-900 relative overflow-hidden">
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl bg-blue-500/20 border border-blue-500/40 mb-8" data-aos="fade-up">
            <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $icon }}"/>
            </svg>
        </div>
        <h2 class="text-4xl lg:text-5xl font-display font-extrabold text-white mb-6 leading-tight" data-aos="fade-up" data-aos-delay="100">
            Pret a demarrer avec {{ $service->title }} ?
        </h2>
        <p class="text-lg text-white/70 mb-10 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            Discutons de votre projet. Notre equipe vous repond sous 24h.
        </p>
        <div class="flex flex-wrap items-center justify-center gap-4" data-aos="fade-up" data-aos-delay="300">
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-blue-600 text-white font-semibold px-8 py-4 rounded-full hover:bg-blue-700 transition-all shadow-xl">
                Demander un devis &rarr;
            </a>
            <a href="{{ route('services') }}" class="inline-flex items-center gap-2 bg-white/10 border border-white/20 text-white font-semibold px-8 py-4 rounded-full hover:bg-white/20 backdrop-blur-md transition-all">
                Voir tous les services
            </a>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init({ duration: 800, easing: 'ease-out', once: true, offset: 80 });</script>
@endpush
