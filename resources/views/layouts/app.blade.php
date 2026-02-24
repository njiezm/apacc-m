<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <title>@yield('title', 'APACC-M - Art et Culture Chrétienne')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        :root { 
            --cardinal: #b91c1c; /* Violet Narthex */
            --cardinal: #b91c1c; /* Rouge APACC-M */
            --dark-menu: #2d3139; /* Le gris anthracite des captures */
        }

        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            /*background-color: #ffffff; */
            color: #1a1a1a; 
            scroll-behavior: smooth;
            background-color: #f6f3ef;
        }

        /* Lignes horizontales typiques Narthex */
        .narthex-line {
            height: 4px;
            background: var(--cardinal);
            width: 100%;
        }

        .narthex-line-double {
            border-top: 1px solid #eee;
            border-bottom: 4px solid var(--cardinal);
            padding: 2px 0;
            margin: 10px 0;
        }

        /* Arches inspirées de la photo 2 */
        .arch-container {
            border: 1px solid #e5e7eb;
            border-radius: 50% 50% 0 0 / 40% 40% 0 0;
            padding: 10px;
            display: inline-block;
            background: white;
box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        }

        /* Navigation */
        .nav-main {
            background: white;
            border-bottom: 1px solid #eee;
        }

        .nav-link {
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #444;
            transition: all 0.3s;
        }
        .nav-link:hover, .nav-link.active { color: var(--cardinal); }

        /* Menu Mobile Sombre (inspiré photo 1) */
        #mobile-menu { 
            position: fixed;
            top: 0;
            right: -100%;
            width: 100%;
            height: 100vh;
            background: var(--dark-menu);
            z-index: 100;
            transition: right 0.4s cubic-bezier(0.77,0.2,0.05,1.0);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        #mobile-menu.open { right: 0; }

        .mobile-link {
            color: white;
            font-size: 1.5rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin: 1rem 0;
            opacity: 0.8;
        }
        .mobile-link:hover { opacity: 1; color: var(--cardinal); }

        /* Footer Style Narthex */
        footer {
            background: #f9fafb;
            border-top: 1px solid #eee;
        }
    </style>
</head>
<body>
    <!-- Barre supérieure Narthex Style -->
    <div class="bg-white pt-4 text-center">
        <h1 class="font-accent text-3xl tracking-widest text-red-900 lowercase" style="font-family: 'Cinzel', serif;">apacc-m</h1>
        <div class="narthex-line-double mt-2"></div>
        <p class="text-[10px] uppercase tracking-[0.3em] font-bold py-1">Art sacré · Patrimoine chrétien Martiniquais· Créations Locales</p>
    </div>

    <!-- Navigation Bureau -->
    <nav class="nav-main sticky top-0 z-40 bg-white/90 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8">
                <span class="font-bold text-lg tracking-tighter">APACC-M</span>
            </a>

            <div class="hidden lg:flex gap-8">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a>
                <a href="{{ route('about') }}" class="nav-link">À propos</a>
                <a href="{{ route('events') }}" class="nav-link">Événements</a>
                <a href="{{ route('artists') }}" class="nav-link">Artistes</a>
                <a href="{{ route('heritage') }}" class="nav-link">Patrimoine</a>
                <a href="{{ route('resources') }}" class="nav-link">Ressources</a>
                <a href="{{ route('shop') }}" class="nav-link">Boutique</a>
                <a href="{{ route('contact') }}" class="nav-link">Contact</a>
            </div>

            <button id="menu-open" class="text-xl p-2">
                <span class="text-[10px] font-black uppercase tracking-widest mr-2 align-middle">Menu</span>
                <i class="fas fa-bars align-middle"></i>
            </button>
        </div>
    </nav>

    <!-- Menu Mobile Plein Écran (Inspiré de votre capture) -->
    <div id="mobile-menu">
        <button id="menu-close" class="absolute top-8 right-8 text-white text-3xl">
            <i class="fas fa-times"></i>
        </button>
        
        <!-- Filigrane discret d'architecture en fond (optionnel) -->
        <div class="absolute left-0 bottom-0 opacity-10 pointer-events-none">
            <svg width="300" height="400" viewBox="0 0 100 100" fill="white">
                <path d="M10 100 L10 40 Q50 0 90 40 L90 100 Z" fill="none" stroke="white" stroke-width="0.5"/>
            </svg>
        </div>

        <div class="flex flex-col items-center">
            <a href="{{ route('home') }}" class="mobile-link">Accueil</a>
            <a href="{{ route('about') }}" class="mobile-link">À propos</a>
            <a href="{{ route('events') }}" class="mobile-link">Événements</a>
            <a href="{{ route('artists') }}" class="mobile-link">Artistes</a>
            <a href="{{ route('heritage') }}" class="mobile-link">Patrimoine</a>
            <a href="{{ route('resources') }}" class="mobile-link">Ressources</a>
            <a href="{{ route('shop') }}" class="mobile-link">Boutique</a>
            <a href="{{ route('contact') }}" class="mobile-link">Contact</a>
            
            <div class="mt-12 text-center text-white/40 text-[10px] uppercase tracking-widest">
                <p class="mb-4">© APACC-M 2026</p>
                <div class="flex gap-4 justify-center">
                    <a href="#" class="hover:text-white transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-white transition"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <main class="min-h-screen">
        @yield('content')
    </main>

    <footer class="py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div class="md:col-span-2 space-y-6">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/logo.png') }}" alt="APACC-M" class="h-10 grayscale">
                        <h2 class="font-bold text-xl tracking-tighter uppercase">APACC-M</h2>
                    </div>
                    <div class="h-[1px] bg-purple-200 w-12"></div>
                    <p class="text-sm text-gray-500 max-w-sm leading-relaxed">
                        Le portail de la culture chrétienne en Martinique. Patrimoine, création contemporaine et dialogue spirituel.
                    </p>
                </div>
                
                <div>
                    <h4 class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 mb-6">Liens</h4>
                    <ul class="text-sm space-y-3 font-semibold text-gray-600">
                        <li><a href="#" class="hover:text-purple-700 transition">Mentions légales</a></li>
                        <li><a href="#" class="hover:text-purple-700 transition">Confidentialité</a></li>
                        <li><a href="#" class="hover:text-purple-700 transition">Newsletter</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 mb-6">Partenaires</h4>
                    <div class="opacity-40 grayscale flex flex-col gap-4">
                        <span class="text-[10px] font-bold">Diocèse de Martinique</span>
                        <a href="#" class="text-[10px] font-bold hover:opacity-70 transition">Devenir partenaire</a>
                        <a href="#" class="text-[10px] font-bold hover:opacity-70 transition">Devenir membre - Adhérer</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const openBtn = document.getElementById('menu-open');
        const closeBtn = document.getElementById('menu-close');
        const menu = document.getElementById('mobile-menu');

        openBtn.addEventListener('click', () => menu.classList.add('open'));
        closeBtn.addEventListener('click', () => menu.classList.remove('open'));
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>