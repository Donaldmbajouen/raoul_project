<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Connexion Admin - {{ config('app.name') }}</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 antialiased">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-md">
            <!-- Logo -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-900 mb-2">
                    {{ strtoupper(config('app.name')) }}
                </h1>
                <p class="text-gray-600">Administration</p>
            </div>
            
            <!-- Login Card -->
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Connexion</h2>
                
                <!-- Flash Messages -->
                @if(session('success'))
                <div class="mb-4 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg text-sm">
                    {{ session('success') }}
                </div>
                @endif
                
                @if(session('error'))
                <div class="mb-4 bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg text-sm">
                    {{ session('error') }}
                </div>
                @endif
                
                <form method="POST" action="{{ route('admin.login') }}">
                    @csrf
                    
                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            required 
                            autofocus
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent transition-all @error('email') border-red-500 @enderror"
                            placeholder="admin@example.com"
                        >
                        @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                            Mot de passe
                        </label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#3B7BF8] focus:border-transparent transition-all @error('password') border-red-500 @enderror"
                            placeholder="••••••••"
                        >
                        @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Remember Me -->
                    <div class="mb-6">
                        <label class="flex items-center">
                            <input 
                                type="checkbox" 
                                name="remember" 
                                class="w-4 h-4 text-[#3B7BF8] border-gray-300 rounded focus:ring-[#3B7BF8]"
                            >
                            <span class="ml-2 text-sm text-gray-600">Se souvenir de moi</span>
                        </label>
                    </div>
                    
                    <!-- Submit Button -->
                    <button 
                        type="submit"
                        class="w-full bg-[#3B7BF8] text-white font-semibold py-3 px-4 rounded-lg hover:bg-[#2563EB] transition-all shadow-lg shadow-blue-500/30"
                    >
                        Se connecter
                    </button>
                </form>
                
                <!-- Back to Site -->
                <div class="mt-6 text-center">
                    <a href="{{ route('home') }}" class="text-sm text-gray-600 hover:text-[#3B7BF8] transition-colors">
                        ← Retour au site
                    </a>
                </div>
            </div>
            
            <!-- Footer -->
            <div class="mt-8 text-center text-sm text-gray-600">
                <p>&copy; {{ date('Y') }} {{ config('app.name') }}. Tous droits réservés.</p>
            </div>
        </div>
    </div>
</body>
</html>
