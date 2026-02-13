<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <title>@yield('title', 'APACC-M - Art et Culture Chrétienne')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap');
        
        /* Mise à jour des couleurs : Rouge Royal et Doré */
        :root { 
            --primary: #dc2626; /* red-600 */
            --primary-hover: #b91c1c; /* red-700 */
            --accent: #fbbf24;  /* amber-400 */
        }

        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #ffffff; 
            color: #1e293b; 
            scroll-behavior: smooth; 
        }
        
        .glass-nav { 
            background: rgba(255, 255, 255, 0.9); 
            backdrop-filter: blur(12px); 
            border-bottom: 1px solid rgba(220, 38, 38, 0.1); 
        }
        
        .nav-link { position: relative; transition: color 0.3s; }
        .nav-link:hover { color: var(--primary); }
        .nav-link.active { color: var(--primary); }
        .nav-link.active::after {
            content: ''; position: absolute; bottom: -4px; left: 0; width: 100%; height: 2px;
            background: var(--primary); border-radius: 2px;
        }

        #mobile-menu { transition: all 0.3s ease-in-out; max-height: 0; overflow: hidden; opacity: 0; }
        #mobile-menu.open { max-height: 600px; opacity: 1; }
    </style>
</head>
<body>
    <nav class="glass-nav fixed w-full z-50 top-0">
        <div class="max-w-6xl mx-auto px-6 h-20 flex items-center justify-between">
            {{-- Remplacement par logo.png --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12 w-auto transition-transform group-hover:scale-105">
                <span class="font-extrabold text-xl text-slate-900 tracking-tight">APACC-M</span>
            </a>
            
            <div class="hidden lg:flex gap-6 items-center text-sm font-bold text-slate-600 uppercase tracking-wider">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">À propos</a>
                <a href="{{ route('events') }}" class="nav-link {{ request()->routeIs('events') ? 'active' : '' }}">Événements</a>
                <a href="{{ route('artists') }}" class="nav-link {{ request()->routeIs('artists') ? 'active' : '' }}">Artistes</a>
                <a href="{{ route('heritage') }}" class="nav-link {{ request()->routeIs('heritage') ? 'active' : '' }}">Patrimoine</a>
                <a href="{{ route('resources') }}" class="nav-link {{ request()->routeIs('resources') ? 'active' : '' }}">Ressources</a>
                <a href="{{ route('shop') }}" class="nav-link {{ request()->routeIs('shop') ? 'active' : '' }}">Boutique</a>
                <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
            </div>

            <button id="menu-toggle" class="lg:hidden text-slate-900 text-2xl p-2">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <div id="mobile-menu" class="lg:hidden bg-white border-t border-red-50">
            <div class="flex flex-col gap-4 p-8 font-bold text-slate-700">
                <a href="{{ route('home') }}" class="hover:text-red-600 transition">Accueil</a>
                <a href="{{ route('about') }}" class="hover:text-red-600 transition">À propos</a>
                <a href="{{ route('events') }}" class="hover:text-red-600 transition">Événements</a>
                <a href="{{ route('artists') }}" class="hover:text-red-600 transition">Artistes</a>
                <a href="{{ route('heritage') }}" class="hover:text-red-600 transition">Patrimoine</a>
                <a href="{{ route('resources') }}" class="hover:text-red-600 transition">Ressources</a>
                <a href="{{ route('shop') }}" class="hover:text-red-600 transition">Boutique</a>
                <a href="{{ route('contact') }}" class="hover:text-red-600 transition">Contact</a>
            </div>
        </div>
    </nav>

    <main class="pt-20 min-h-screen">
        @yield('content')
    </main>

    <footer class="relative bg-slate-950 text-slate-300 overflow-hidden">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute -top-32 -left-32 w-96 h-96 bg-red-600/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-[30rem] h-[30rem] bg-amber-500/5 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 py-20">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-16 items-start">

                <div class="lg:col-span-2 space-y-8">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/logo.png') }}" alt="APACC-M" class="h-16 w-auto brightness-0 invert">
                        <h2 class="text-2xl md:text-3xl font-black text-white leading-tight uppercase tracking-tighter">
                            APACC-M
                        </h2>
                    </div>

                    <p class="text-lg md:text-xl text-slate-400 leading-relaxed max-w-2xl">
                        Valoriser l’art, la foi et la culture chrétienne martiniquaise  
                        <span class="text-red-500 font-semibold italic">à travers la création, la transmission et la mémoire.</span>
                    </p>

                    <div class="flex gap-5 pt-4">
                        <a href="#" class="w-11 h-11 rounded-xl bg-slate-900 border border-slate-800 hover:bg-red-600 hover:border-red-600 flex items-center justify-center transition text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-11 h-11 rounded-xl bg-slate-900 border border-slate-800 hover:bg-red-600 hover:border-red-600 flex items-center justify-center transition text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-11 h-11 rounded-xl bg-slate-900 border border-slate-800 hover:bg-red-600 hover:border-red-600 flex items-center justify-center transition text-white">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-2 lg:grid-cols-1 gap-10">
                    <div>
                        <h4 class="text-amber-500 font-black text-sm uppercase tracking-widest mb-6">
                            Explorer
                        </h4>
                        <ul class="space-y-3 text-sm font-medium">
                            <li><a href="{{ route('about') }}" class="hover:text-red-500 transition">L’association</a></li>
                            <li><a href="{{ route('events') }}" class="hover:text-red-500 transition">Événements</a></li>
                            <li><a href="{{ route('artists') }}" class="hover:text-red-500 transition">Artistes</a></li>
                            <li><a href="{{ route('heritage') }}" class="hover:text-red-500 transition">Patrimoine</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-amber-500 font-black text-sm uppercase tracking-widest mb-6">
                            Contact
                        </h4>
                        <p class="text-sm text-slate-400 leading-relaxed font-medium">
                            11 Avenue Franz Fanon<br>
                            97200 Fort-de-France<br>
                            <span class="text-slate-500 mt-2 block">contact@apacc-m.fr</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-20 pt-8 border-t border-slate-900 flex flex-col md:flex-row justify-between items-center gap-6 text-[11px] uppercase tracking-[0.2em] text-slate-600 font-bold">
                <p>© 2026 APACC-M — Martinique</p>
                <div class="flex gap-6">
                    <a href="{{ route('legal') }}" class="hover:text-white transition">Mentions légales</a>
                    <a href="{{ route('privacy') }}" class="hover:text-white transition">Confidentialité</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const icon = menuToggle.querySelector('i');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('open');
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-times');
        });
    </script>
</body>
</html>