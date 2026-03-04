@extends('layouts.app')

@section('title', __('contact.title'))

@section('content')
<!-- Hero Section -->
<section class="relative py-20 lg:py-32 bg-gradient-to-br from-gray-50 to-white overflow-hidden">
    <!-- Subtle Grid Pattern Background -->
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: repeating-linear-gradient(0deg, #000 0px, #000 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #000 0px, #000 1px, transparent 1px, transparent 40px);"></div>
    
    <!-- Decorative Elements -->
    <div class="absolute top-20 right-10 w-32 h-32 bg-green-200 rounded-2xl opacity-50"></div>
    <div class="absolute top-40 right-32 w-24 h-24 bg-green-300 rounded-2xl opacity-30"></div>
    <div class="absolute bottom-20 right-20 w-40 h-40 bg-green-200 rounded-2xl opacity-40"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto">
            <!-- Title -->
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-display font-extrabold text-gray-900 mb-6" data-aos="fade-up">
                {{ __('contact.hero.title') }}
            </h1>
            
            <!-- Subtitle -->
            <p class="text-lg text-gray-600 mb-8" data-aos="fade-up" data-aos-delay="100">
                {{ __('contact.hero.subtitle') }}
            </p>
            
            <!-- Breadcrumb -->
            <div class="flex items-center justify-center gap-2 text-sm" data-aos="fade-up" data-aos-delay="200">
                <a href="{{ route('home') }}" class="text-[#3B7BF8] hover:underline">
                    {{ __('contact.breadcrumb.home') }}
                </a>
                <span class="text-gray-400">/</span>
                <span class="text-gray-600">{{ __('contact.breadcrumb.contact') }}</span>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form & Info Section -->
<section class="py-20 lg:py-28 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Left: Contact Info -->
            <div data-aos="fade-right">
                <div class="inline-block mb-6">
                    <span class="text-[#3B7BF8] text-sm font-bold uppercase tracking-wider">
                        {{ __('contact.info.badge') }}
                    </span>
                </div>
                
                <h2 class="text-3xl lg:text-4xl font-display font-bold text-gray-900 mb-6">
                    {{ __('contact.info.title') }}
                </h2>
                
                <p class="text-gray-600 text-base leading-relaxed mb-10">
                    {{ __('contact.info.description') }}
                </p>
                
                <!-- Contact Details -->
                <div class="space-y-6">
                    <!-- Email -->
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm text-gray-500 mb-1">Email</div>
                            <a href="mailto:contact@inovixora.com" class="text-gray-900 font-semibold hover:text-[#3B7BF8] transition-colors">
                                contact@inovixora.com
                            </a>
                        </div>
                    </div>
                    
                    <!-- Phone -->
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm text-gray-500 mb-1">Téléphone</div>
                            <a href="tel:+33123456789" class="text-gray-900 font-semibold hover:text-[#3B7BF8] transition-colors">
                                +33 1 23 45 67 89
                            </a>
                        </div>
                    </div>
                    
                    <!-- Location -->
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm text-gray-500 mb-1">Adresse</div>
                            <p class="text-gray-900 font-semibold">
                                123 Avenue des Champs-Élysées<br>
                                75008 Paris, France
                            </p>
                        </div>
                    </div>
                    
                    <!-- Social Links -->
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-[#3B7BF8]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm text-gray-500 mb-2">Réseaux sociaux</div>
                            <div class="flex gap-3">
                                <a href="#" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center hover:bg-[#3B7BF8] hover:text-white transition-all">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center hover:bg-[#3B7BF8] hover:text-white transition-all">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center hover:bg-[#3B7BF8] hover:text-white transition-all">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right: Contact Form -->
            <div data-aos="fade-left">
                <div class="bg-gray-50 rounded-3xl p-8 lg:p-10">
                    <h3 class="text-2xl font-display font-bold text-gray-900 mb-6">
                        {{ __('contact.form.title') }}
                    </h3>
                    
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-900 mb-2">
                                {{ __('contact.form.name') }}
                            </label>
                            <input type="text" id="name" name="name" required
                                   class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#3B7BF8] focus:ring-2 focus:ring-[#3B7BF8]/20 outline-none transition-all"
                                   placeholder="Votre nom complet">
                        </div>
                        
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-900 mb-2">
                                {{ __('contact.form.email') }}
                            </label>
                            <input type="email" id="email" name="email" required
                                   class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#3B7BF8] focus:ring-2 focus:ring-[#3B7BF8]/20 outline-none transition-all"
                                   placeholder="votre@email.com">
                        </div>
                        
                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-900 mb-2">
                                {{ __('contact.form.phone') }}
                            </label>
                            <input type="tel" id="phone" name="phone"
                                   class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#3B7BF8] focus:ring-2 focus:ring-[#3B7BF8]/20 outline-none transition-all"
                                   placeholder="+33 1 23 45 67 89">
                        </div>
                        
                        <!-- Subject -->
                        <div>
                            <label for="subject" class="block text-sm font-semibold text-gray-900 mb-2">
                                {{ __('contact.form.subject') }}
                            </label>
                            <select id="subject" name="subject" required
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#3B7BF8] focus:ring-2 focus:ring-[#3B7BF8]/20 outline-none transition-all">
                                <option value="">Sélectionnez un sujet</option>
                                <option value="web">Création de site web</option>
                                <option value="marketing">Marketing digital</option>
                                <option value="automation">Automatisation & IA</option>
                                <option value="training">Formations</option>
                                <option value="other">Autre</option>
                            </select>
                        </div>
                        
                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-900 mb-2">
                                {{ __('contact.form.message') }}
                            </label>
                            <textarea id="message" name="message" rows="5" required
                                      class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#3B7BF8] focus:ring-2 focus:ring-[#3B7BF8]/20 outline-none transition-all resize-none"
                                      placeholder="Décrivez votre projet..."></textarea>
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" class="w-full bg-[#3B7BF8] text-white text-base font-semibold px-8 py-4 rounded-full hover:bg-[#2563EB] hover:-translate-y-0.5 transition-all shadow-lg shadow-blue-500/30">
                            {{ __('contact.form.submit') }} →
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 lg:py-28 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-block mb-4">
                <span class="text-[#3B7BF8] text-sm font-bold uppercase tracking-wider">
                    FAQ
                </span>
            </div>
            <h2 class="text-3xl lg:text-4xl xl:text-5xl font-display font-bold text-gray-900 leading-tight">
                Questions Fréquentes
            </h2>
        </div>
        
        <!-- FAQ Items -->
        <div class="space-y-4">
            @foreach([
                ['question' => 'Quels sont vos délais de réalisation ?', 'answer' => 'Les délais varient selon la complexité du projet. En moyenne, un site web vitrine prend 2-3 semaines, un site e-commerce 4-6 semaines, et les projets d\'automatisation 1-2 semaines. Nous établissons un planning détaillé dès le début du projet.'],
                ['question' => 'Proposez-vous un accompagnement après la livraison ?', 'answer' => 'Oui, nous offrons un support technique et un accompagnement post-livraison. Nous proposons également des contrats de maintenance pour assurer la pérennité de votre solution digitale.'],
                ['question' => 'Quels sont vos tarifs ?', 'answer' => 'Nos tarifs sont adaptés à chaque projet selon vos besoins spécifiques. Nous proposons des devis personnalisés gratuits. Contactez-nous pour discuter de votre projet et obtenir une estimation précise.'],
                ['question' => 'Travaillez-vous avec des clients internationaux ?', 'answer' => 'Absolument ! Nous travaillons avec des clients partout dans le monde. Nos processus sont entièrement adaptés au travail à distance et nous communiquons en français et en anglais.'],
                ['question' => 'Puis-je modifier mon site après sa création ?', 'answer' => 'Oui, tous nos sites sont conçus avec des CMS modernes qui vous permettent de modifier facilement le contenu. Nous vous formons à l\'utilisation de ces outils et restons disponibles pour toute assistance.'],
                ['question' => 'Proposez-vous des formations personnalisées ?', 'answer' => 'Oui, nous proposons des formations sur mesure adaptées à vos besoins spécifiques. Que ce soit pour la création web, le marketing digital ou l\'automatisation, nous créons un programme adapté à votre niveau et vos objectifs.']
            ] as $index => $faq)
            <div class="faq-item bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                <button class="faq-question w-full text-left px-8 py-6 flex items-center justify-between gap-4 group">
                    <span class="text-lg font-semibold text-gray-900 group-hover:text-[#3B7BF8] transition-colors">
                        {{ $faq['question'] }}
                    </span>
                    <svg class="faq-icon w-6 h-6 text-[#3B7BF8] flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-answer hidden px-8 pb-6">
                    <p class="text-gray-600 leading-relaxed">
                        {{ $faq['answer'] }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 lg:py-28 bg-gradient-to-br from-[#3B7BF8] to-[#2563EB] relative overflow-hidden">
    <div class="absolute inset-0 opacity-10" style="background-image: repeating-linear-gradient(0deg, #fff 0px, #fff 1px, transparent 1px, transparent 40px), repeating-linear-gradient(90deg, #fff 0px, #fff 1px, transparent 1px, transparent 40px);"></div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h2 class="text-3xl lg:text-4xl xl:text-5xl font-display font-bold text-white mb-6" data-aos="fade-up">
            Vous n'avez pas trouvé votre réponse ?
        </h2>
        <p class="text-white/90 text-lg mb-10" data-aos="fade-up" data-aos-delay="100">
            Notre équipe est là pour répondre à toutes vos questions
        </p>
        <a href="mailto:contact@inovixora.com" class="inline-flex items-center gap-2 bg-white text-[#3B7BF8] text-base font-semibold px-10 py-5 rounded-full hover:bg-gray-100 hover:-translate-y-1 transition-all shadow-2xl" data-aos="fade-up" data-aos-delay="200">
            Nous écrire →
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
    
    // FAQ Accordion
    document.querySelectorAll('.faq-question').forEach(button => {
        button.addEventListener('click', () => {
            const faqItem = button.parentElement;
            const answer = faqItem.querySelector('.faq-answer');
            const icon = button.querySelector('.faq-icon');
            
            // Toggle current item
            answer.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        });
    });
</script>
@endpush
