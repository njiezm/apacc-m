@extends('layouts.app')

@section('title', 'Médiathèque - APACC-M')

@section('content')

@php
    $featuredResources = [
        [
            'type' => 'article',
            'type_label' => 'Article',
            'icon' => 'fa-file-alt',
            'color' => 'red',
            'title' => "L'influence créole dans l'art sacré",
            'desc' => "Une analyse de la fusion entre traditions chrétiennes et culture créole.",
            'duration' => '15 min',
            'image' => 'art-sacre',
            'url' => '/actualite/influence-creole-art-sacre',
            'is_external' => false
        ],
        [
            'type' => 'video',
            'type_label' => 'Vidéo',
            'icon' => 'fa-play-circle',
            'color' => 'amber',
            'title' => "Églises historiques de Martinique",
            'desc' => "Documentaire captivant sur l'architecture et l'histoire des clochers de l'île.",
            'duration' => '45 min',
            'image' => 'eglises',
            'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
            'is_external' => true
        ],
        [
            'type' => 'podcast',
            'type_label' => 'Podcast',
            'icon' => 'fa-microphone',
            'color' => 'slate',
            'title' => "Épisode 12: Le chant créole",
            'desc' => "Découvrez l'histoire fascinante des chants religieux en langue régionale.",
            'duration' => '35 min',
            'image' => 'chants',
            'url' => 'https://open.spotify.com/episode/123',
            'is_external' => true
        ],
        [
            'type' => 'article',
            'type_label' => 'Article',
            'icon' => 'fa-file-alt',
            'color' => 'red',
            'title' => "Le patrimoine architectural religieux",
            'desc' => "Exploration des trésors cachés du patrimoine sacré martiniquais.",
            'duration' => '20 min',
            'image' => 'patrimoine',
            'url' => '/actualite/patrimoine-architectural-religieux',
            'is_external' => false
        ],
        [
            'type' => 'video',
            'type_label' => 'Vidéo',
            'icon' => 'fa-play-circle',
            'color' => 'amber',
            'title' => "Fête du Saint-Esprit 2024",
            'desc' => "Les moments forts de la célébration annuelle à Sainte-Marie.",
            'duration' => '30 min',
            'image' => 'fete-2024',
            'url' => 'https://vimeo.com/123456789',
            'is_external' => true
        ],
        [
            'type' => 'article',
            'type_label' => 'Article',
            'icon' => 'fa-file-alt',
            'color' => 'red',
            'title' => "Les symboles du christianisme créole",
            'desc' => "Décodage des signes et symboles uniques à la culture martiniquaise.",
            'duration' => '25 min',
            'image' => 'symboles',
            'url' => '/actualite/symboles-christianisme-creole',
            'is_external' => false
        ]
    ];

    $bibleTexts = [
        ['title' => 'Psaume 23', 'sub' => 'Le Seigneur est mon berger', 'img' => 'psaume'],
        ['title' => 'Le Bon Samaritain', 'sub' => 'Parabole de la miséricorde', 'img' => 'samaritain'],
        ['title' => 'La Création', 'sub' => 'Genèse chapitre 1', 'img' => 'genese'],
        ['title' => 'Chemin de Damas', 'sub' => 'Conversion de St Paul', 'img' => 'paul'],
    ];
@endphp

{{-- Hero Section Prestige --}}
<section class="relative pt-36 pb-32 bg-slate-950 overflow-hidden">
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-red-600/10 blur-[120px] rounded-full"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-amber-500/10 blur-[120px] rounded-full"></div>

    <div class="relative z-10 max-w-6xl mx-auto px-6 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 text-amber-500 text-xs font-black uppercase tracking-[0.3em] mb-8">
            <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-amber-500"></span>
            </span>
            Archives & Médiathèque
        </div>
        
        <h1 class="text-5xl md:text-8xl font-black text-white mb-8 tracking-tighter">
            Le Savoir en <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-amber-500">Partage</span>
        </h1>
        
        <p class="text-lg md:text-xl text-slate-400 max-w-2xl mx-auto leading-relaxed mb-12 italic">
            "Une immersion dans l'art et la spiritualité martiniquaise à travers des contenus sélectionnés pour vous."
        </p>

        <div class="inline-flex flex-wrap justify-center gap-8 md:gap-16 py-8 px-12 rounded-[2.5rem] bg-white/5 border border-white/10 backdrop-blur-md">
            @foreach(['Articles' => '150+', 'Vidéos' => '85', 'Podcasts' => '45'] as $label => $count)
            <div class="text-center">
                <div class="text-3xl font-black text-white mb-1">{{ $count }}</div>
                <div class="text-[10px] font-black text-amber-500 uppercase tracking-[0.2em]">{{ $label }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Barre de recherche flottante --}}
<div class="max-w-5xl mx-auto px-6 -mt-12 relative z-30">
    <div class="bg-white p-3 rounded-[2.5rem] shadow-2xl border border-red-50">
        <div class="flex flex-col md:flex-row gap-2">
            <div class="relative flex-grow">
                <i class="fas fa-search absolute left-6 top-1/2 -translate-y-1/2 text-slate-400"></i>
                <input type="text" id="searchInput" placeholder="Rechercher un article, une vidéo..." 
                    class="w-full pl-14 pr-6 py-5 bg-slate-50 rounded-[1.8rem] border-none focus:ring-2 focus:ring-red-500/20 text-slate-700 placeholder:text-slate-400 transition-all">
            </div>
            <div class="flex p-1 bg-slate-50 rounded-[1.8rem] overflow-x-auto no-scrollbar">
                <button class="filter-btn active px-8 py-4 rounded-[1.5rem] font-bold text-sm transition-all whitespace-nowrap" data-tab="all">Tout</button>
                <button class="filter-btn px-8 py-4 rounded-[1.5rem] font-bold text-sm text-slate-500 hover:text-red-600 transition-all whitespace-nowrap" data-tab="article">Articles</button>
                <button class="filter-btn px-8 py-4 rounded-[1.5rem] font-bold text-sm text-slate-500 hover:text-red-600 transition-all whitespace-nowrap" data-tab="video">Vidéos</button>
                <button class="filter-btn px-8 py-4 rounded-[1.5rem] font-bold text-sm text-slate-500 hover:text-red-600 transition-all whitespace-nowrap" data-tab="podcast">Podcasts</button>
            </div>
        </div>
    </div>
</div>

{{-- Grille de Ressources --}}
<section class="py-24 px-6 min-h-[600px] bg-white">
    <div class="max-w-6xl mx-auto">
        <div class="grid md:grid-cols-3 gap-10" id="resourceGrid">
            @foreach($featuredResources as $res)
            <article class="resource-card group" data-type="{{ $res['type'] }}" data-title="{{ strtolower($res['title']) }}">
                <div class="flex flex-col h-full bg-white rounded-[3rem] border border-slate-100 hover:border-red-100 shadow-sm hover:shadow-2xl transition-all duration-500 overflow-hidden">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://picsum.photos/seed/{{ $res['image'] }}/800/600" alt="{{ $res['title'] }}" 
                               class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent"></div>
                        <div class="absolute top-6 left-6 px-4 py-2 bg-white/95 backdrop-blur shadow-sm rounded-xl flex items-center gap-2">
                            <i class="fas {{ $res['icon'] }} text-red-600 text-xs"></i>
                            <span class="text-[10px] font-black uppercase tracking-widest text-slate-900">{{ $res['type_label'] }}</span>
                            @if($res['is_external'])
                                <span class="px-2 py-0.5 bg-amber-100 text-amber-700 text-[9px] font-black rounded">EXTERNE</span>
                            @endif
                        </div>
                    </div>

                    <div class="p-10 flex flex-col flex-grow">
                        <div class="flex items-center gap-3 text-[10px] font-black text-amber-600 mb-5 uppercase tracking-widest">
                            <span class="flex items-center gap-1.5"><i class="far fa-clock text-red-600"></i> {{ $res['duration'] }}</span>
                            <span class="w-1 h-1 rounded-full bg-amber-300"></span>
                            <span>Accès Libre</span>
                        </div>
                        
                        <h3 class="text-2xl font-bold text-slate-900 mb-4 leading-tight group-hover:text-red-600 transition-colors">
                            {{ $res['title'] }}
                        </h3>
                        
                        <p class="text-slate-500 text-sm leading-relaxed mb-8 flex-grow">
                            {{ $res['desc'] }}
                        </p>

                        <a href="{{ $res['url'] }}" 
                           class="resource-link inline-flex items-center justify-between w-full p-1.5 pl-6 bg-slate-900 group-hover:bg-red-600 rounded-2xl transition-all duration-300"
                           data-external="{{ $res['is_external'] ? 'true' : 'false' }}">
                            <span class="font-bold text-[10px] uppercase tracking-widest text-white">
                                {{ $res['is_external'] ? 'Voir la source' : 'Découvrir' }}
                            </span>
                            <div class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center text-white">
                                <i class="fas {{ $res['is_external'] ? 'fa-external-link-alt' : 'fa-arrow-right' }} text-xs group-hover:translate-x-1 transition-transform"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>

        <div id="noResults" class="hidden py-24 text-center">
            <div class="inline-flex items-center justify-center w-24 h-24 bg-red-50 rounded-full mb-6">
                <i class="fas fa-search text-red-200 text-3xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-slate-900">Aucune ressource trouvée</h3>
            <p class="text-slate-500">Essayez d'autres mots-clés pour explorer notre médiathèque.</p>
        </div>
    </div>
</section>

{{-- Section Parole en Images - Style Galerie d'Exposition --}}
<section class="py-32 bg-slate-50 border-y border-slate-100">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tighter mb-4 uppercase">La Parole en images</h2>
            <div class="w-20 h-1 bg-amber-500 mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($bibleTexts as $index => $bible)
            <div class="group relative aspect-[3/4] rounded-[2.5rem] overflow-hidden shadow-xl cursor-pointer {{ $index % 2 != 0 ? 'lg:mt-12' : '' }}">
                <img src="https://picsum.photos/seed/{{ $bible['img'] }}/600/800" class="absolute inset-0 w-full h-full object-cover scale-110 group-hover:scale-100 transition-transform duration-[2s]">
                <div class="absolute inset-0 bg-gradient-to-t from-red-950 via-transparent to-transparent opacity-80"></div>
                <div class="absolute inset-x-0 bottom-0 p-8">
                    <h4 class="text-xl font-bold text-white mb-2">{{ $bible['title'] }}</h4>
                    <p class="text-amber-400 text-xs font-black uppercase tracking-widest opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0 transition-all duration-500">{{ $bible['sub'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Newsletter Prestige --}}
<section class="py-24 px-6 bg-white">
    <div class="max-w-5xl mx-auto relative group">
        <div class="absolute -inset-1 bg-gradient-to-r from-red-600 to-amber-500 rounded-[4rem] blur opacity-20 group-hover:opacity-40 transition duration-1000"></div>
        <div class="relative bg-slate-950 rounded-[3.5rem] p-10 md:p-20 overflow-hidden border border-white/5">
            <div class="absolute top-0 right-0 w-1/3 h-full bg-red-600/5 -skew-x-12"></div>
            
            <div class="relative z-10 grid lg:grid-cols-2 gap-12 items-center text-center lg:text-left">
                <div>
                    <h2 class="text-3xl md:text-4xl font-black text-white mb-6 leading-tight uppercase tracking-tighter">Lettre d'Information <br><span class="text-red-600">Culturelle</span>.</h2>
                    <p class="text-slate-400 text-lg italic">"Recevez l'essentiel du patrimoine directement dans votre boîte mail."</p>
                </div>
                <form class="flex flex-col sm:flex-row gap-3 p-2 bg-white/5 rounded-3xl border border-white/10">
                    <input type="email" placeholder="Votre adresse email" class="flex-grow px-6 py-4 bg-transparent text-white border-none focus:ring-0 placeholder:text-slate-600">
                    <button class="px-8 py-4 bg-red-600 hover:bg-red-700 text-white font-black uppercase tracking-widest rounded-2xl transition-all shadow-xl shadow-red-600/20">
                        S'abonner
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- Fenêtre Modale de Confirmation pour Liens Externes --}}
<div id="externalModal" class="fixed inset-0 z-[100] opacity-0 invisible transition-all duration-300">
    <div class="absolute inset-0 bg-slate-950/80 backdrop-blur-sm" onclick="closeExternalModal()"></div>
    <div class="relative min-h-screen flex items-center justify-center px-6 py-12">
        <div class="bg-white rounded-[3rem] p-10 max-w-md w-full shadow-2xl text-center transform scale-95 transition-transform duration-300" id="modalContent">
            <div class="w-20 h-20 bg-red-50 text-red-600 rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-external-link-alt text-2xl"></i>
            </div>
            <h3 class="text-2xl font-black text-slate-900 mb-4 uppercase">Lien Externe</h3>
            <p class="text-slate-500 mb-8">Vous allez être redirigé vers un site partenaire. Souhaitez-vous continuer ?</p>
            <div class="flex gap-4">
                <button onclick="closeExternalModal()" class="flex-1 py-4 bg-slate-100 text-slate-900 font-black rounded-2xl hover:bg-slate-200 transition-all uppercase text-xs tracking-widest">Annuler</button>
                <button id="confirmExternal" class="flex-1 py-4 bg-red-600 text-white font-black rounded-2xl hover:bg-red-700 transition-all uppercase text-xs tracking-widest shadow-xl shadow-red-600/20">Continuer</button>
            </div>
        </div>
    </div>
</div>

@endsection


<style>
    .filter-btn.active { @apply bg-red-600 text-white shadow-xl shadow-red-600/30; }
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    .resource-card { transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1); }
    .resource-card.hidden-item { opacity: 0; transform: scale(0.9) translateY(20px); pointer-events: none; position: absolute; }
    
    /* Styles pour la modale */
    #externalModal.show { 
        opacity: 1; 
        visibility: visible; 
    }
    #externalModal.show #modalContent {
        transform: scale(1);
    }
</style>

<script>
    let externalUrl = '';

    document.addEventListener('DOMContentLoaded', () => {
        const buttons = document.querySelectorAll('.filter-btn');
        const cards = document.querySelectorAll('.resource-card');
        const searchInput = document.getElementById('searchInput');
        const noResults = document.getElementById('noResults');
        const modal = document.getElementById('externalModal');
        const confirmBtn = document.getElementById('confirmExternal');

        // Fonction de filtrage
        function filterContent() {
            const activeTab = document.querySelector('.filter-btn.active').getAttribute('data-tab');
            const searchTerm = searchInput.value.toLowerCase();
            let hasVisibleCards = false;

            cards.forEach(card => {
                const type = card.getAttribute('data-type');
                const title = card.getAttribute('data-title');
                const matchesTab = activeTab === 'all' || type === activeTab;
                const matchesSearch = title.includes(searchTerm);

                if (matchesTab && matchesSearch) {
                    card.classList.remove('hidden-item', 'hidden');
                    hasVisibleCards = true;
                } else {
                    card.classList.add('hidden-item', 'hidden');
                }
            });

            noResults.classList.toggle('hidden', hasVisibleCards);
        }

        // Gestion des filtres
        buttons.forEach(btn => {
            btn.addEventListener('click', function() {
                buttons.forEach(b => b.classList.remove('active', 'bg-red-600', 'text-white'));
                this.classList.add('active', 'bg-red-600', 'text-white');
                filterContent();
            });
        });

        // Gestion de la recherche
        searchInput.addEventListener('input', filterContent);

        // Gestion des liens externes
        document.querySelectorAll('.resource-link').forEach(link => {
            link.addEventListener('click', function(e) {
                const isExternal = this.getAttribute('data-external') === 'true';
                
                if (isExternal) {
                    e.preventDefault();
                    externalUrl = this.href;
                    showExternalModal();
                }
                // Les liens internes fonctionnent normalement
            });
        });

        // Gestion du bouton de confirmation
        confirmBtn.addEventListener('click', function() {
            // Ouvre une nouvelle fenêtre avec about:blank
            const newWindow = window.open('about:blank', '_blank');
            
            // Redirige la nouvelle fenêtre vers l'URL externe
            if (newWindow) {
                newWindow.location.href = externalUrl;
            }
            
            // Ferme la modale
            closeExternalModal();
        });
    });

    // Fonction pour afficher la modale
    function showExternalModal() {
        const modal = document.getElementById('externalModal');
        modal.classList.add('show');
        document.body.style.overflow = 'hidden';
    }

    // Fonction pour fermer la modale
    function closeExternalModal() {
        const modal = document.getElementById('externalModal');
        modal.classList.remove('show');
        document.body.style.overflow = 'auto';
        externalUrl = '';
    }

    // Fermeture avec la touche Échap
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeExternalModal();
        }
    });
</script>
