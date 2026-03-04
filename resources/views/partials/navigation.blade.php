<nav class="absolute top-0 left-0 right-0 z-50 {{ request()->routeIs('home') ? 'bg-transparent' : 'bg-white/95 backdrop-blur-md shadow-sm' }}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="{{ request()->routeIs('home') ? 'text-white' : 'text-gray-900' }} font-display text-xl font-bold tracking-tight">
                    {{ strtoupper(config('app.name')) }}
                </div>
            </a>
            
            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center gap-1">
                <a href="{{ route('home') }}" class="px-3 py-2 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:text-white hover:bg-white/10' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-100' }} rounded-md transition-all">
                    {{ __('nav.home') }}
                </a>
                <a href="{{ route('about') }}" class="px-3 py-2 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:text-white hover:bg-white/10' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-100' }} rounded-md transition-all">
                    {{ __('nav.about') }}
                </a>
                
                <!-- Services Dropdown -->
                <div class="relative group">
                    <button class="px-3 py-2 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:text-white hover:bg-white/10' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-100' }} rounded-md transition-all flex items-center gap-1">
                        {{ __('nav.services') }}
                        <svg class="w-3 h-3 opacity-70 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 12 12" stroke-width="2">
                            <path d="M2 4l4 4 4-4"/>
                        </svg>
                    </button>
                    
                    <!-- Dropdown Menu -->
                    <div class="absolute top-full left-0 mt-2 w-[700px] bg-white rounded-2xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="grid grid-cols-2 gap-8 p-8">
                            <!-- SR Services -->
                            <div>
                                <h3 class="text-sm font-bold text-[#3B7BF8] uppercase tracking-wider mb-4">
                                    {{ __('nav.services_sr') }}
                                </h3>
                                <ul class="space-y-2">
                                    <li>
                                        <a href="{{ route('services.show', 'reseaux-informatiques') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-[#3B7BF8] rounded-lg transition-all">
                                            {{ __('nav.service_network') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('services.show', 'serveurs') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-[#3B7BF8] rounded-lg transition-all">
                                            {{ __('nav.service_servers') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('services.show', 'cloud-hebergement') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-[#3B7BF8] rounded-lg transition-all">
                                            {{ __('nav.service_cloud') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('services.show', 'telecom-iot') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-[#3B7BF8] rounded-lg transition-all">
                                            {{ __('nav.service_telecom') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('services.show', 'data-ia') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-[#3B7BF8] rounded-lg transition-all">
                                            {{ __('nav.service_data') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('services.show', 'integration-api') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-[#3B7BF8] rounded-lg transition-all">
                                            {{ __('nav.service_api') }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            
                            <!-- GL Services -->
                            <div>
                                <h3 class="text-sm font-bold text-[#3B7BF8] uppercase tracking-wider mb-4">
                                    {{ __('nav.services_gl') }}
                                </h3>
                                <ul class="space-y-2">
                                    <li>
                                        <a href="{{ route('services.show', 'agents-ia') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-[#3B7BF8] rounded-lg transition-all">
                                            {{ __('nav.service_ai_agents') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('services.show', 'ia-automatisation') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-[#3B7BF8] rounded-lg transition-all">
                                            {{ __('nav.service_ai_automation') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('services.show', 'reseaux-internet') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-[#3B7BF8] rounded-lg transition-all">
                                            {{ __('nav.service_internet') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('services.show', 'logiciels-gestion') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-[#3B7BF8] rounded-lg transition-all">
                                            {{ __('nav.service_software') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('services.show', 'formation-informatique') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-[#3B7BF8] rounded-lg transition-all">
                                            {{ __('nav.service_training') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('services.show', 'conseils-audit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-[#3B7BF8] rounded-lg transition-all">
                                            {{ __('nav.service_consulting') }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <a href="{{ route('realizations') }}" class="px-3 py-2 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:text-white hover:bg-white/10' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-100' }} rounded-md transition-all">
                    {{ __('nav.realizations') }}
                </a>
                <a href="{{ route('programs') }}" class="px-3 py-2 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:text-white hover:bg-white/10' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-100' }} rounded-md transition-all">
                    {{ __('nav.programs') }}
                </a>
                <a href="{{ route('training') }}" class="px-3 py-2 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:text-white hover:bg-white/10' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-100' }} rounded-md transition-all">
                    {{ __('nav.training') }}
                </a>
                <a href="{{ route('blog') }}" class="px-3 py-2 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:text-white hover:bg-white/10' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-100' }} rounded-md transition-all">
                    {{ __('nav.blog') }}
                </a>
                <a href="{{ route('contact') }}" class="px-3 py-2 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:text-white hover:bg-white/10' : 'text-gray-700 hover:text-gray-900 hover:bg-gray-100' }} rounded-md transition-all">
                    {{ __('nav.contact') }}
                </a>
            </div>
            
            <!-- Actions -->
            <div class="flex items-center gap-3">
                <!-- Language -->
                <button class="flex items-center gap-1 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/70 hover:text-white' : 'text-gray-600 hover:text-gray-900' }} transition-colors">
                    <span>🌐</span>
                    <span class="hidden sm:inline">{{ strtoupper(app()->getLocale()) }}</span>
                </button>
                
                <!-- CTA Button -->
                <a href="{{ route('contact') }}" class="hidden sm:inline-flex items-center gap-2 bg-[#3B7BF8] text-white text-sm font-semibold px-5 py-2.5 rounded-full hover:bg-[#2563EB] transition-all shadow-lg shadow-blue-500/50">
                    {{ __('nav.cta') }} →
                </a>
                
                <!-- Mobile Menu -->
                <button class="{{ request()->routeIs('home') ? 'text-white' : 'text-gray-900' }} lg:hidden p-2" id="mobile-menu-toggle">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden border-t {{ request()->routeIs('home') ? 'border-white/10 bg-black/40' : 'border-gray-200 bg-white' }} backdrop-blur-lg">
        <div class="max-w-7xl mx-auto px-4 py-4 flex flex-col gap-2">
            <a href="{{ route('home') }}" class="px-4 py-3 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:bg-white/10' : 'text-gray-700 hover:bg-gray-100' }} rounded-md transition-all">{{ __('nav.home') }}</a>
            <a href="{{ route('services') }}" class="px-4 py-3 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:bg-white/10' : 'text-gray-700 hover:bg-gray-100' }} rounded-md transition-all">{{ __('nav.services') }}</a>
            <a href="{{ route('about') }}" class="px-4 py-3 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:bg-white/10' : 'text-gray-700 hover:bg-gray-100' }} rounded-md transition-all">{{ __('nav.about') }}</a>
            <a href="{{ route('realizations') }}" class="px-4 py-3 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:bg-white/10' : 'text-gray-700 hover:bg-gray-100' }} rounded-md transition-all">{{ __('nav.realizations') }}</a>
            <a href="{{ route('programs') }}" class="px-4 py-3 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:bg-white/10' : 'text-gray-700 hover:bg-gray-100' }} rounded-md transition-all">{{ __('nav.programs') }}</a>
            <a href="{{ route('training') }}" class="px-4 py-3 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:bg-white/10' : 'text-gray-700 hover:bg-gray-100' }} rounded-md transition-all">{{ __('nav.training') }}</a>
            <a href="{{ route('blog') }}" class="px-4 py-3 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:bg-white/10' : 'text-gray-700 hover:bg-gray-100' }} rounded-md transition-all">{{ __('nav.blog') }}</a>
            <a href="{{ route('contact') }}" class="px-4 py-3 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:bg-white/10' : 'text-gray-700 hover:bg-gray-100' }} rounded-md transition-all">{{ __('nav.contact') }}</a>
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-[#3B7BF8] text-white text-sm font-semibold px-5 py-2.5 rounded-full hover:bg-[#2563EB] transition-all mt-2">
                {{ __('nav.cta') }} →
            </a>
        </div>
    </div>
</nav>

<!-- Back to Home Button (appears on scroll) -->
<button id="back-to-home" class="fixed bottom-8 right-8 z-50 bg-[#3B7BF8] text-white p-4 rounded-full shadow-2xl shadow-blue-500/50 hover:bg-[#2563EB] hover:scale-110 transition-all duration-300 opacity-0 pointer-events-none">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
    </svg>
</button>

<script>
// Back to Home button functionality
const backToHomeBtn = document.getElementById('back-to-home');
const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');

// Show/hide back to home button on scroll
window.addEventListener('scroll', () => {
    if (window.scrollY > 500) {
        backToHomeBtn.classList.remove('opacity-0', 'pointer-events-none');
        backToHomeBtn.classList.add('opacity-100', 'pointer-events-auto');
    } else {
        backToHomeBtn.classList.add('opacity-0', 'pointer-events-none');
        backToHomeBtn.classList.remove('opacity-100', 'pointer-events-auto');
    }
});

// Scroll to top smoothly
backToHomeBtn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

// Mobile menu toggle
mobileMenuToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});
</script>
