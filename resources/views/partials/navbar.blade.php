<header class="fixed top-0 left-0 right-0 bg-white/90 backdrop-blur-md border-b border-slate-100 z-50">
    <nav class="max-w-6xl mx-auto px-6 py-4">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                <div class="w-8 h-8 bg-slate-900 rounded-lg flex items-center justify-center text-white text-xs group-hover:bg-primary transition-colors">
                    <i class="fas fa-dove"></i>
                </div>
                <span class="font-bold text-slate-900 text-lg">APACC-M</span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">
                <a href="{{ route('home') }}" class="nav-link text-slate-600 hover:text-primary font-medium transition-colors {{ request()->routeIs('home') ? 'text-primary' : '' }}">
                    Accueil
                </a>
                <a href="{{ route('about') }}" class="nav-link text-slate-600 hover:text-primary font-medium transition-colors {{ request()->routeIs('about') ? 'text-primary' : '' }}">
                    À propos
                </a>
                <a href="{{ route('events') }}" class="nav-link text-slate-600 hover:text-primary font-medium transition-colors {{ request()->routeIs('events') ? 'text-primary' : '' }}">
                    Événements
                </a>
                <a href="{{ route('artists') }}" class="nav-link text-slate-600 hover:text-primary font-medium transition-colors {{ request()->routeIs('artists') ? 'text-primary' : '' }}">
                    Réseau d'artistes
                </a>
                <a href="{{ route('heritage') }}" class="nav-link text-slate-600 hover:text-primary font-medium transition-colors {{ request()->routeIs('heritage') ? 'text-primary' : '' }}">
                    Patrimoine
                </a>
                <a href="{{ route('resources') }}" class="nav-link text-slate-600 hover:text-primary font-medium transition-colors {{ request()->routeIs('resources') ? 'text-primary' : '' }}">
                    Ressources
                </a>
                <a href="{{ route('shop') }}" class="nav-link text-slate-600 hover:text-primary font-medium transition-colors {{ request()->routeIs('shop') ? 'text-primary' : '' }}">
                    Boutique
                </a>
                <a href="{{ route('contact') }}" class="nav-link text-slate-600 hover:text-primary font-medium transition-colors {{ request()->routeIs('contact') ? 'text-primary' : '' }}">
                    Contact
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden w-10 h-10 flex items-center justify-center rounded-xl hover:bg-slate-100 transition-colors">
                <i class="fas fa-bars text-slate-600"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4">
            <div class="flex flex-col gap-3">
                <a href="{{ route('home') }}" class="text-slate-600 hover:text-primary font-medium py-2">Accueil</a>
                <a href="{{ route('about') }}" class="text-slate-600 hover:text-primary font-medium py-2">À propos</a>
                <a href="{{ route('events') }}" class="text-slate-600 hover:text-primary font-medium py-2">Événements</a>
                <a href="{{ route('artists') }}" class="text-slate-600 hover:text-primary font-medium py-2">Réseau d'artistes</a>
                <a href="{{ route('heritage') }}" class="text-slate-600 hover:text-primary font-medium py-2">Patrimoine</a>
                <a href="{{ route('resources') }}" class="text-slate-600 hover:text-primary font-medium py-2">Ressources</a>
                <a href="{{ route('shop') }}" class="text-slate-600 hover:text-primary font-medium py-2">Boutique</a>
                <a href="{{ route('contact') }}" class="text-slate-600 hover:text-primary font-medium py-2">Contact</a>
            </div>
        </div>
    </nav>
</header>