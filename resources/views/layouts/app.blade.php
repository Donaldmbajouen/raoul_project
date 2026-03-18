<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Tech Temple') }} - @yield('title', 'Build Your Own Legacy')</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        /* Custom Cursor */
        #cursor-dot {
            width: 12px;
            height: 12px;
            background: #3B7BF8;
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 9999;
            transition: transform 0.15s ease-out, opacity 0.15s ease-out;
            transform: translate(-50%, -50%);
        }
        
        body.cursor-hover #cursor-dot {
            transform: translate(-50%, -50%) scale(1.5);
        }
        
        /* Hide custom cursor on mobile/tablet */
        @media (max-width: 1024px) {
            #cursor-dot {
                display: none;
            }
        }
    </style>
</head>
<body class="antialiased">
    <!-- Custom Cursor -->
    <div id="cursor-dot"></div>
    
    <!-- Navigation -->
    @include('partials.navigation')
    
    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    
    <!-- Footer -->
    @include('partials.footer')
    
    <!-- Custom Cursor Script -->
    <script>
        // Only run on desktop
        if (window.innerWidth > 1024) {
            const cursorDot = document.getElementById('cursor-dot');
            
            // Update mouse position
            document.addEventListener('mousemove', (e) => {
                cursorDot.style.left = e.clientX + 'px';
                cursorDot.style.top = e.clientY + 'px';
            });
            
            // Add hover effect on interactive elements
            const interactiveElements = document.querySelectorAll('a, button, input, textarea, select, [role="button"]');
            
            interactiveElements.forEach(el => {
                el.addEventListener('mouseenter', () => {
                    document.body.classList.add('cursor-hover');
                });
                
                el.addEventListener('mouseleave', () => {
                    document.body.classList.remove('cursor-hover');
                });
            });
            
            // Hide cursor when leaving window
            document.addEventListener('mouseleave', () => {
                cursorDot.style.opacity = '0';
            });
            
            document.addEventListener('mouseenter', () => {
                cursorDot.style.opacity = '1';
            });
        }
    </script>
    
    @stack('scripts')
</body>
</html>
