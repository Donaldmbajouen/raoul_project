<nav class="absolute top-0 left-0 right-0 z-[100] {{ request()->routeIs('home') ? 'bg-transparent' : 'bg-white/95 backdrop-blur-md shadow-sm' }}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <img src="{{ asset('assets/images/logo.png') }}" alt="{{ config('app.name') }}" class="h-15 w-auto object-contain">
                <!-- <span class="{{ request()->routeIs('home') ? 'text-white' : 'text-gray-900' }} font-display text-2xl font-extrabold tracking-tight leading-none">
                    {{ config('app.name') }}
                </span> -->
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
                    <div class="absolute top-full left-0 mt-2 w-[700px] bg-white rounded-2xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-[110]">
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
                <!-- Language Switcher -->
                <div class="relative group">
                    <button class="flex items-center gap-1 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/70 hover:text-white' : 'text-gray-600 hover:text-gray-900' }} transition-colors">
                        <span>🌐</span>
                        <span class="hidden sm:inline">{{ strtoupper(app()->getLocale()) }}</span>
                        <svg class="w-3 h-3 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 12 12" stroke-width="2">
                            <path d="M2 4l4 4 4-4"/>
                        </svg>
                    </button>
                    
                    <!-- Dropdown -->
                    <div class="absolute top-full right-0 mt-2 w-32 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-[110]">
                        <a href="{{ route('lang.switch', 'fr') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-[#3B7BF8] rounded-t-lg transition-all {{ app()->getLocale() === 'fr' ? 'bg-blue-50 text-[#3B7BF8] font-semibold' : '' }}">
                            <span>🇫🇷</span>
                            <span>Français</span>
                            @if(app()->getLocale() === 'fr')
                            <svg class="w-4 h-4 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                            @endif
                        </a>
                        <a href="{{ route('lang.switch', 'en') }}" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-[#3B7BF8] rounded-b-lg transition-all {{ app()->getLocale() === 'en' ? 'bg-blue-50 text-[#3B7BF8] font-semibold' : '' }}">
                            <span>🇬🇧</span>
                            <span>English</span>
                            @if(app()->getLocale() === 'en')
                            <svg class="w-4 h-4 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                            @endif
                        </a>
                    </div>
                </div>
                
                <!-- Admin Link -->
                <a href="{{ auth()->check() ? route('admin.dashboard') : route('admin.login') }}" title="Administration" class="{{ request()->routeIs('home') ? 'text-white/40 hover:text-white/70' : 'text-gray-300 hover:text-gray-500' }} transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </a>

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
    
    <!-- Mobile Menu (outside the container) -->
    <div id="mobile-menu" class="mobile-menu-closed lg:hidden border-t {{ request()->routeIs('home') ? 'border-white/10 bg-black/95' : 'border-gray-200 bg-white' }} backdrop-blur-lg shadow-2xl max-h-[80vh] overflow-y-auto">
        <div class="max-w-7xl mx-auto px-4 py-4 space-y-1">
            <a href="{{ route('home') }}" class="block px-4 py-3 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:bg-white/10' : 'text-gray-700 hover:bg-gray-100' }} rounded-md transition-all">
                {{ __('nav.home') }}
            </a>
            
            <a href="{{ route('about') }}" class="block px-4 py-3 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:bg-white/10' : 'text-gray-700 hover:bg-gray-100' }} rounded-md transition-all">
                {{ __('nav.about') }}
            </a>
            
            <!-- Services Dropdown Mobile -->
            <div>
                <button type="button" id="mobile-services-toggle" class="w-full flex items-center justify-between px-4 py-3 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:bg-white/10' : 'text-gray-700 hover:bg-gray-100' }} rounded-md transition-all">
                    <span>{{ __('nav.services') }}</span>
                    <svg class="w-4 h-4 transition-transform duration-200" id="mobile-services-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                
                <div id="mobile-services-menu" class="hidden mt-1 space-y-1 pl-2">
                    <!-- SR Services -->
                    <div class="py-2">
                        <div class="px-4 py-1 text-xs font-bold text-[#3B7BF8] uppercase tracking-wider">
                            {{ __('nav.services_sr') }}
                        </div>
                        <a href="{{ route('services.show', 'reseaux-informatiques') }}" class="block px-4 py-2 text-xs {{ request()->routeIs('home') ? 'text-white/80 hover:bg-white/10' : 'text-gray-600 hover:bg-gray-100' }} rounded-md transition-all">
                            {{ __('nav.service_network') }}
                        </a>
                        <a href="{{ route('services.show', 'serveurs') }}" class="block px-4 py-2 text-xs {{ request()->routeIs('home') ? 'text-white/80 hover:bg-white/10' : 'text-gray-600 hover:bg-gray-100' }} rounded-md transition-all">
                            {{ __('nav.service_servers') }}
                        </a>
                        <a href="{{ route('services.show', 'cloud-hebergement') }}" class="block px-4 py-2 text-xs {{ request()->routeIs('home') ? 'text-white/80 hover:bg-white/10' : 'text-gray-600 hover:bg-gray-100' }} rounded-md transition-all">
                            {{ __('nav.service_cloud') }}
                        </a>
                        <a href="{{ route('services.show', 'telecom-iot') }}" class="block px-4 py-2 text-xs {{ request()->routeIs('home') ? 'text-white/80 hover:bg-white/10' : 'text-gray-600 hover:bg-gray-100' }} rounded-md transition-all">
                            {{ __('nav.service_telecom') }}
                        </a>
                        <a href="{{ route('services.show', 'data-ia') }}" class="block px-4 py-2 text-xs {{ request()->routeIs('home') ? 'text-white/80 hover:bg-white/10' : 'text-gray-600 hover:bg-gray-100' }} rounded-md transition-all">
                            {{ __('nav.service_data') }}
                        </a>
                        <a href="{{ route('services.show', 'integration-api') }}" class="block px-4 py-2 text-xs {{ request()->routeIs('home') ? 'text-white/80 hover:bg-white/10' : 'text-gray-600 hover:bg-gray-100' }} rounded-md transition-all">
                            {{ __('nav.service_api') }}
                        </a>
                    </div>
                    
                    <!-- GL Services -->
                    <div class="py-2">
                        <div class="px-4 py-1 text-xs font-bold text-[#3B7BF8] uppercase tracking-wider">
                            {{ __('nav.services_gl') }}
                        </div>
                        <a href="{{ route('services.show', 'agents-ia') }}" class="block px-4 py-2 text-xs {{ request()->routeIs('home') ? 'text-white/80 hover:bg-white/10' : 'text-gray-600 hover:bg-gray-100' }} rounded-md transition-all">
                            {{ __('nav.service_ai_agents') }}
                        </a>
                        <a href="{{ route('services.show', 'ia-automatisation') }}" class="block px-4 py-2 text-xs {{ request()->routeIs('home') ? 'text-white/80 hover:bg-white/10' : 'text-gray-600 hover:bg-gray-100' }} rounded-md transition-all">
                            {{ __('nav.service_ai_automation') }}
                        </a>
                        <a href="{{ route('services.show', 'reseaux-internet') }}" class="block px-4 py-2 text-xs {{ request()->routeIs('home') ? 'text-white/80 hover:bg-white/10' : 'text-gray-600 hover:bg-gray-100' }} rounded-md transition-all">
                            {{ __('nav.service_internet') }}
                        </a>
                        <a href="{{ route('services.show', 'logiciels-gestion') }}" class="block px-4 py-2 text-xs {{ request()->routeIs('home') ? 'text-white/80 hover:bg-white/10' : 'text-gray-600 hover:bg-gray-100' }} rounded-md transition-all">
                            {{ __('nav.service_software') }}
                        </a>
                        <a href="{{ route('services.show', 'formation-informatique') }}" class="block px-4 py-2 text-xs {{ request()->routeIs('home') ? 'text-white/80 hover:bg-white/10' : 'text-gray-600 hover:bg-gray-100' }} rounded-md transition-all">
                            {{ __('nav.service_training') }}
                        </a>
                        <a href="{{ route('services.show', 'conseils-audit') }}" class="block px-4 py-2 text-xs {{ request()->routeIs('home') ? 'text-white/80 hover:bg-white/10' : 'text-gray-600 hover:bg-gray-100' }} rounded-md transition-all">
                            {{ __('nav.service_consulting') }}
                        </a>
                    </div>
                </div>
            </div>
            
            <a href="{{ route('realizations') }}" class="block px-4 py-3 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:bg-white/10' : 'text-gray-700 hover:bg-gray-100' }} rounded-md transition-all">
                {{ __('nav.realizations') }}
            </a>
            
            <a href="{{ route('programs') }}" class="block px-4 py-3 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:bg-white/10' : 'text-gray-700 hover:bg-gray-100' }} rounded-md transition-all">
                {{ __('nav.programs') }}
            </a>
            
            <a href="{{ route('training') }}" class="block px-4 py-3 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:bg-white/10' : 'text-gray-700 hover:bg-gray-100' }} rounded-md transition-all">
                {{ __('nav.training') }}
            </a>
            
            <a href="{{ route('blog') }}" class="block px-4 py-3 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:bg-white/10' : 'text-gray-700 hover:bg-gray-100' }} rounded-md transition-all">
                {{ __('nav.blog') }}
            </a>
            
            <a href="{{ route('contact') }}" class="block px-4 py-3 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:bg-white/10' : 'text-gray-700 hover:bg-gray-100' }} rounded-md transition-all">
                {{ __('nav.contact') }}
            </a>
            
            <!-- Language Switcher Mobile -->
            <div class="border-t {{ request()->routeIs('home') ? 'border-white/10' : 'border-gray-200' }} pt-3 mt-3">
                <div class="px-4 py-2 text-xs font-semibold {{ request()->routeIs('home') ? 'text-white/60' : 'text-gray-500' }} uppercase tracking-wider">
                    {{ app()->getLocale() === 'fr' ? 'Langue' : 'Language' }}
                </div>
                <a href="{{ route('lang.switch', 'fr') }}" class="flex items-center gap-2 px-4 py-2.5 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:bg-white/10' : 'text-gray-700 hover:bg-gray-100' }} rounded-md transition-all {{ app()->getLocale() === 'fr' ? (request()->routeIs('home') ? 'bg-white/10' : 'bg-blue-50 text-[#3B7BF8]') : '' }}">
                    <span>🇫🇷</span>
                    <span>Français</span>
                    @if(app()->getLocale() === 'fr')
                    <svg class="w-4 h-4 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                    </svg>
                    @endif
                </a>
                <a href="{{ route('lang.switch', 'en') }}" class="flex items-center gap-2 px-4 py-2.5 text-sm font-medium {{ request()->routeIs('home') ? 'text-white/90 hover:bg-white/10' : 'text-gray-700 hover:bg-gray-100' }} rounded-md transition-all {{ app()->getLocale() === 'en' ? (request()->routeIs('home') ? 'bg-white/10' : 'bg-blue-50 text-[#3B7BF8]') : '' }}">
                    <span>🇬🇧</span>
                    <span>English</span>
                    @if(app()->getLocale() === 'en')
                    <svg class="w-4 h-4 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                    </svg>
                    @endif
                </a>
            </div>
            
            <!-- CTA Button -->
            <div class="pt-3 pb-2">
                <a href="{{ route('contact') }}" class="block text-center bg-[#3B7BF8] text-white text-sm font-semibold px-5 py-3 rounded-full hover:bg-[#2563EB] transition-all shadow-lg">
                    {{ __('nav.cta') }} →
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Back to Home Button (appears on scroll) -->
<button id="back-to-home" class="fixed bottom-8 right-8 z-[90] bg-[#3B7BF8] text-white p-4 rounded-full shadow-2xl shadow-blue-500/50 hover:bg-[#2563EB] hover:scale-110 transition-all duration-300 opacity-0 pointer-events-none">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
    </svg>
</button>

<style>
    .mobile-menu-closed {
        display: none;
    }
    
    .mobile-menu-open {
        display: block;
    }
    
    @media (min-width: 1024px) {
        #mobile-menu {
            display: none !important;
        }
    }
</style>

<script>
(function() {
    'use strict';
    
    // Wait for DOM to be fully loaded
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initNavigation);
    } else {
        initNavigation();
    }
    
    function initNavigation() {
        console.log('Navigation initialized');
        
        // Get elements
        const backToHomeBtn = document.getElementById('back-to-home');
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileServicesToggle = document.getElementById('mobile-services-toggle');
        const mobileServicesMenu = document.getElementById('mobile-services-menu');
        const mobileServicesIcon = document.getElementById('mobile-services-icon');
        
        console.log('Mobile menu toggle:', mobileMenuToggle);
        console.log('Mobile menu:', mobileMenu);

        // Back to Home button functionality
        if (backToHomeBtn) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 500) {
                    backToHomeBtn.classList.remove('opacity-0', 'pointer-events-none');
                    backToHomeBtn.classList.add('opacity-100', 'pointer-events-auto');
                } else {
                    backToHomeBtn.classList.add('opacity-0', 'pointer-events-none');
                    backToHomeBtn.classList.remove('opacity-100', 'pointer-events-auto');
                }
            });

            backToHomeBtn.addEventListener('click', function() {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }

        // Mobile menu toggle
        if (mobileMenuToggle && mobileMenu) {
            mobileMenuToggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                console.log('Mobile menu toggle clicked');
                
                const isClosed = mobileMenu.classList.contains('mobile-menu-closed');
                console.log('Menu is closed:', isClosed);
                
                if (isClosed) {
                    mobileMenu.classList.remove('mobile-menu-closed');
                    mobileMenu.classList.add('mobile-menu-open');
                    console.log('Menu opened');
                } else {
                    mobileMenu.classList.remove('mobile-menu-open');
                    mobileMenu.classList.add('mobile-menu-closed');
                    console.log('Menu closed');
                }
                
                // Change hamburger icon to X when menu is open
                const icon = mobileMenuToggle.querySelector('svg');
                if (icon) {
                    if (mobileMenu.classList.contains('mobile-menu-closed')) {
                        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>';
                    } else {
                        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>';
                    }
                }
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!mobileMenuToggle.contains(e.target) && !mobileMenu.contains(e.target)) {
                    if (mobileMenu.classList.contains('mobile-menu-open')) {
                        mobileMenu.classList.remove('mobile-menu-open');
                        mobileMenu.classList.add('mobile-menu-closed');
                        const icon = mobileMenuToggle.querySelector('svg');
                        if (icon) {
                            icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>';
                        }
                    }
                }
            });

            // Close mobile menu when clicking on a link
            const menuLinks = mobileMenu.querySelectorAll('a');
            menuLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    mobileMenu.classList.remove('mobile-menu-open');
                    mobileMenu.classList.add('mobile-menu-closed');
                    const icon = mobileMenuToggle.querySelector('svg');
                    if (icon) {
                        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>';
                    }
                });
            });
        } else {
            console.error('Mobile menu elements not found!');
        }

        // Mobile services submenu toggle
        if (mobileServicesToggle && mobileServicesMenu && mobileServicesIcon) {
            mobileServicesToggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                console.log('Services toggle clicked');
                
                mobileServicesMenu.classList.toggle('hidden');
                mobileServicesIcon.classList.toggle('rotate-180');
            });
        }
    }
})();
</script>

