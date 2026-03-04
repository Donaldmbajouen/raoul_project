<footer class="bg-gray-50 border-t border-gray-200 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
            <!-- Logo & Contact -->
            <div>
                <div class="mb-6">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-2xl font-display font-bold text-gray-900">{{ strtoupper(config('app.name')) }}</span>
                    </div>
                    <p class="text-xs text-gray-500 italic">{{ __('footer.tagline') }}</p>
                </div>
                
                <div class="space-y-3">
                    <a href="mailto:{{ config('mail.from.address') }}" class="block text-sm text-gray-900 hover:text-[#3B7BF8] transition-colors">
                        {{ config('mail.from.address') }}
                    </a>
                    <div class="space-y-1 text-sm text-gray-600">
                        <p>(+33) 7 59 18 93 07</p>
                        <p>(+33) 7 66 06 35 02</p>
                        <p>(+237) 6 72 89 61 47</p>
                    </div>
                </div>
            </div>
            
            <!-- Pages -->
            <div>
                <h3 class="text-sm font-bold text-gray-900 mb-6 uppercase tracking-wider">{{ __('footer.pages') }}</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('home') }}" class="text-sm text-gray-600 hover:text-[#3B7BF8] transition-colors">
                            {{ __('nav.home') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="text-sm text-gray-600 hover:text-[#3B7BF8] transition-colors">
                            {{ __('nav.about') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="text-sm text-gray-600 hover:text-[#3B7BF8] transition-colors">
                            {{ __('nav.services') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('realizations') }}" class="text-sm text-gray-600 hover:text-[#3B7BF8] transition-colors">
                            {{ __('nav.realizations') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('programs') }}" class="text-sm text-gray-600 hover:text-[#3B7BF8] transition-colors">
                            {{ __('nav.programs') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}" class="text-sm text-gray-600 hover:text-[#3B7BF8] transition-colors">
                            {{ __('nav.blog') }}
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- Socials -->
            <div>
                <h3 class="text-sm font-bold text-gray-900 mb-6 uppercase tracking-wider">{{ __('footer.socials') }}</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="#" class="text-sm text-gray-600 hover:text-[#3B7BF8] transition-colors">
                            Instagram
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-gray-600 hover:text-[#3B7BF8] transition-colors">
                            Facebook
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-gray-600 hover:text-[#3B7BF8] transition-colors">
                            Twitter
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-gray-600 hover:text-[#3B7BF8] transition-colors">
                            LinkedIn
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- Services -->
            <div>
                <h3 class="text-sm font-bold text-gray-900 mb-6 uppercase tracking-wider">{{ __('footer.services') }}</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('services') }}" class="text-sm text-gray-600 hover:text-[#3B7BF8] transition-colors">
                            {{ __('footer.service1') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="text-sm text-gray-600 hover:text-[#3B7BF8] transition-colors">
                            {{ __('footer.service2') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="text-sm text-gray-600 hover:text-[#3B7BF8] transition-colors">
                            {{ __('footer.service3') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="text-sm text-gray-600 hover:text-[#3B7BF8] transition-colors">
                            {{ __('footer.service4') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="text-sm text-gray-600 hover:text-[#3B7BF8] transition-colors">
                            {{ __('footer.service5') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="text-sm text-gray-600 hover:text-[#3B7BF8] transition-colors">
                            {{ __('footer.service6') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="text-sm text-gray-600 hover:text-[#3B7BF8] transition-colors">
                            {{ __('footer.service7') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Bottom Bar -->
        <div class="pt-8 border-t border-gray-200">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm text-gray-500">
                    {{ __('footer.copyright', ['year' => date('Y')]) }}
                </p>
                
                <div class="flex flex-wrap gap-6 text-sm text-gray-500">
                    <a href="#" class="hover:text-[#3B7BF8] transition-colors">
                        {{ __('footer.privacy') }}
                    </a>
                    <a href="#" class="hover:text-[#3B7BF8] transition-colors">
                        {{ __('footer.terms') }}
                    </a>
                    <a href="#" class="hover:text-[#3B7BF8] transition-colors">
                        {{ __('footer.legal') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
