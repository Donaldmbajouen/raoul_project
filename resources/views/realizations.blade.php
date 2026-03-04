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
                All
            </button>
            <button class="tab-btn px-6 py-3 rounded-full text-sm font-semibold transition-all duration-300 bg-gray-100 text-gray-700 hover:bg-gray-200" data-category="automatisation">
                Automatisation & Agent IA
            </button>
            <button class="tab-btn px-6 py-3 rounded-full text-sm font-semibold transition-all duration-300 bg-gray-100 text-gray-700 hover:bg-gray-200" data-category="conception">
                Conception Graphique
            </button>
            <button class="tab-btn px-6 py-3 rounded-full text-sm font-semibold transition-all duration-300 bg-gray-100 text-gray-700 hover:bg-gray-200" data-category="web">
                Création De Site Web
            </button>
            <button class="tab-btn px-6 py-3 rounded-full text-sm font-semibold transition-all duration-300 bg-gray-100 text-gray-700 hover:bg-gray-200" data-category="marketing">
                Marketing Digital
            </button>
        </div>
        
        <!-- Projects Grid - 2 per row -->
        <div id="projects-grid" class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            
            <!-- Project Card 1 - Automatisation -->
            <div class="project-card bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group" data-category="automatisation" data-aos="fade-up">
                <div class="relative overflow-hidden h-80">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1200&auto=format&fit=crop" 
                         alt="Automatisation OPCO" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-[#3B7BF8] text-white text-xs font-bold px-4 py-2 rounded-full">Automatisation & Agent IA</span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-display font-bold text-gray-900 mb-3 group-hover:text-[#3B7BF8] transition-colors">
                        Automatisez Vos Dossiers OPCO & Qualiopi
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Automatisation des dossiers OPCO (Afdas, Akto, ATLAS, OPCO EP, FAFIH, ADEFICE...) et des documents Qualiopi pour accélérer la gestion administrative des organismes de formation et services RH.
                    </p>
                    <a href="{{ route('project.show', 'automatisation-opco-qualiopi') }}" class="inline-flex items-center gap-2 text-[#3B7BF8] font-semibold text-sm hover:gap-3 transition-all">
                        Voir le projet →
                    </a>
                </div>
            </div>
            
            <!-- Project Card 2 - Web -->
            <div class="project-card bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group" data-category="web" data-aos="fade-up" data-aos-delay="100">
                <div class="relative overflow-hidden h-80">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1200&auto=format&fit=crop" 
                         alt="Site E-Commerce" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-green-500 text-white text-xs font-bold px-4 py-2 rounded-full">Création De Site Web</span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-display font-bold text-gray-900 mb-3 group-hover:text-[#3B7BF8] transition-colors">
                        Site E-Commerce: Les Délices D'afriques
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Création d'un site e-commerce moderne et immersif pour Fadel à 937, permettant de célébrer ses jus africains artisanaux et d'améliorer sa visibilité, sa crédibilité et sa conversion en ligne.
                    </p>
                    <a href="#" class="inline-flex items-center gap-2 text-[#3B7BF8] font-semibold text-sm hover:gap-3 transition-all">
                        Voir le projet →
                    </a>
                </div>
            </div>
            
            <!-- Project Card 3 - Marketing -->
            <div class="project-card bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group" data-category="marketing" data-aos="fade-up" data-aos-delay="200">
                <div class="relative overflow-hidden h-80">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1200&auto=format&fit=crop" 
                         alt="Campagne Marketing" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-purple-500 text-white text-xs font-bold px-4 py-2 rounded-full">Marketing Digital</span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-display font-bold text-gray-900 mb-3 group-hover:text-[#3B7BF8] transition-colors">
                        Campagne Marketing Digital 360°
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Stratégie marketing complète incluant SEO, publicités ciblées, gestion des réseaux sociaux et création de contenu pour maximiser la visibilité et les conversions.
                    </p>
                    <a href="#" class="inline-flex items-center gap-2 text-[#3B7BF8] font-semibold text-sm hover:gap-3 transition-all">
                        Voir le projet →
                    </a>
                </div>
            </div>
            
            <!-- Project Card 4 - Conception -->
            <div class="project-card bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group" data-category="conception" data-aos="fade-up" data-aos-delay="300">
                <div class="relative overflow-hidden h-80">
                    <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?q=80&w=1200&auto=format&fit=crop" 
                         alt="Identité Visuelle" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-yellow-500 text-white text-xs font-bold px-4 py-2 rounded-full">Conception Graphique</span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-display font-bold text-gray-900 mb-3 group-hover:text-[#3B7BF8] transition-colors">
                        Identité Visuelle Complète
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Création d'une identité visuelle moderne et cohérente incluant logo, charte graphique, supports de communication et déclinaisons digitales pour renforcer l'image de marque.
                    </p>
                    <a href="#" class="inline-flex items-center gap-2 text-[#3B7BF8] font-semibold text-sm hover:gap-3 transition-all">
                        Voir le projet →
                    </a>
                </div>
            </div>
            
            <!-- Project Card 5 - Web -->
            <div class="project-card bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group" data-category="web" data-aos="fade-up" data-aos-delay="100">
                <div class="relative overflow-hidden h-80">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1200&auto=format&fit=crop" 
                         alt="Application Web" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-green-500 text-white text-xs font-bold px-4 py-2 rounded-full">Création De Site Web</span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-display font-bold text-gray-900 mb-3 group-hover:text-[#3B7BF8] transition-colors">
                        Plateforme SaaS Innovante
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Développement d'une application web SaaS complète avec tableau de bord intuitif, gestion des utilisateurs et intégrations API pour optimiser les processus métier.
                    </p>
                    <a href="#" class="inline-flex items-center gap-2 text-[#3B7BF8] font-semibold text-sm hover:gap-3 transition-all">
                        Voir le projet →
                    </a>
                </div>
            </div>
            
            <!-- Project Card 6 - Automatisation -->
            <div class="project-card bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group" data-category="automatisation" data-aos="fade-up" data-aos-delay="200">
                <div class="relative overflow-hidden h-80">
                    <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?q=80&w=1200&auto=format&fit=crop" 
                         alt="Agent IA" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="bg-[#3B7BF8] text-white text-xs font-bold px-4 py-2 rounded-full">Automatisation & Agent IA</span>
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-display font-bold text-gray-900 mb-3 group-hover:text-[#3B7BF8] transition-colors">
                        Assistant IA Conversationnel
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-6">
                        Développement d'un agent IA intelligent pour automatiser le support client, répondre aux questions fréquentes et améliorer l'expérience utilisateur 24/7.
                    </p>
                    <a href="#" class="inline-flex items-center gap-2 text-[#3B7BF8] font-semibold text-sm hover:gap-3 transition-all">
                        Voir le projet →
                    </a>
                </div>
            </div>
            
        </div>
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
            
            // Update active tab
            tabBtns.forEach(b => {
                b.classList.remove('active', 'bg-[#3B7BF8]', 'text-white', 'shadow-lg');
                b.classList.add('bg-gray-100', 'text-gray-700');
            });
            btn.classList.add('active', 'bg-[#3B7BF8]', 'text-white', 'shadow-lg');
            btn.classList.remove('bg-gray-100', 'text-gray-700');
            
            // Filter projects
            projectCards.forEach(card => {
                const cardCategory = card.getAttribute('data-category');
                
                if (category === 'all' || cardCategory === category) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    }, 10);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.9)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
</script>
@endpush
