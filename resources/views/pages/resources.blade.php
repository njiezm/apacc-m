@extends('layouts.app')

@section('title', 'Médiathèque - APACC-M')

@section('content')

@php
// NOUVELLES RESSOURCES BASÉES SUR VOS INSTRUCTIONS
 $featuredResources = [
    [
        'type' => 'article',
        'type_label' => 'Article / Réflexion',
        'title' => 'Dire le sacré en société animiste : « BWA BRILÉ » d\'Eugène MONA',
        'desc' => 'Une analyse profonde par Max BÉLAISE de l\'œuvre d\'Eugène Mona, explorant la rencontre du sacré chrétien et de l\'animisme.',
        'duration' => '15 min',
        'image' => 'bwa-brile-mona',
        'url' => '#',
        'is_external' => false
    ],
    [
        'type' => 'article',
        'type_label' => 'Archive',
        'title' => 'Revue Transandans n°1',
        'desc' => 'Consultez gratuitement le premier numéro de la revue Transandans, une mine d\'or de réflexions sur la culture et la spiritualité.',
        'duration' => '45 min',
        'image' => 'revue-transandans',
        'url' => '#',
        'is_external' => false
    ],
    [
        'type' => 'video',
        'type_label' => 'Archive Vidéo',
        'title' => 'Retour en images sur le festival...',
        'desc' => 'Plongez au cœur des moments forts de notre dernier festival, entre célébrations, partages et découvertes artistiques.',
        'duration' => '12 min',
        'image' => 'festival-archive',
        'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', // Lien YouTube fictif
        'is_external' => true
    ],
    [
        'type' => 'article',
        'type_label' => 'Histoire',
        'title' => 'Histoire de la Cathédrale St-Louis',
        'desc' => 'Découvrez les étapes de construction, les architectes et les secrets de l\'un des plus joyaux du patrimoine martiniquais.',
        'duration' => '20 min',
        'image' => 'cathedrale-st-louis',
        'url' => '#',
        'is_external' => false
    ],
    [
        'type' => 'article',
        'type_label' => 'Histoire',
        'title' => 'Histoire du Vitrail',
        'desc' => 'De l\'art roman aux créations contemporaines, explorez l\'évolution fascinante du vitrail dans les édifices sacrés.',
        'duration' => '25 min',
        'image' => 'histoire-vitrail',
        'url' => '#',
        'is_external' => false
    ],
    [
        'type' => 'article',
        'type_label' => 'Formation',
        'title' => 'La Géométrie Sacrée',
        'desc' => 'Introduction aux principes fondamentaux qui régissent l\'architecture des temples et des églises à travers les âges.',
        'duration' => '30 min',
        'image' => 'geometrie-sacree',
        'url' => '#',
        'is_external' => false
    ],
    [
        'type' => 'article',
        'type_label' => 'Traduction',
        'title' => 'Les textes sacrés traduits en créole',
        'desc' => 'Un travail passionnant pour rendre la Parole accessible et vibrante dans la langue de notre peuple.',
        'duration' => '10 min',
        'image' => 'textes-creoles',
        'url' => '#',
        'is_external' => false
    ],
    [
        'type' => 'article',
        'type_label' => 'Paramentique',
        'title' => 'Les parements en monde créole',
        'desc' => 'Découvrez l\'art des textiles liturgiques adaptés à la culture et à la chaleur de notre environnement créole.',
        'duration' => '15 min',
        'image' => 'paramentique-creole',
        'url' => '#',
        'is_external' => false
    ],
    [
        'type' => 'article',
        'type_label' => 'Culture & Société',
        'title' => 'Dialoguer le sacré en monde créole',
        'desc' => 'Réflexions sur les défis et les richesses de l\'inculturation de la foi chrétienne en Martinique.',
        'duration' => '18 min',
        'image' => 'dialogue-sacre',
        'url' => '#',
        'is_external' => false
    ],
    [
        'type' => 'video',
        'type_label' => 'École d\'Arts Sacrés',
        'title' => 'Former et transmettre le sacré',
        'desc' => 'Reportage sur nos ateliers où l\'art et la foi se rencontrent pour former la prochaine génération de créateurs.',
        'duration' => '22 min',
        'image' => 'ecole-arts-sacres',
        'url' => 'https://vimeo.com/123456789', // Lien Vimeo fictif
        'is_external' => true
    ]
];

// NOUVELLES DONNÉES POUR LA SECTION "NOS ACTIONS EN IMAGES"
 $actionImages = [
    ['title' => 'Traduction', 'sub' => 'Les textes sacrés traduits en créole martiniquais', 'img' => 'traduction'],
    ['title' => 'Paramentique', 'sub' => 'Les parements en mode créoles', 'img' => 'paramentique'],
    ['title' => 'Culture et Société', 'sub' => 'Dialoguer le sacré en monde créole', 'img' => 'exposition-art'],
    ['title' => 'Ecole d\'Arts Sacrés', 'sub' => 'Former et transmettre le sacré', 'img' => 'atelier-geometrie'],
];

@endphp

{{-- Hero Section - Style Sombre & Profond --}}
<header class="pt-16 pb-16 px-6 bg-gradient-to-b from-neutral-50 to-white border-b border-neutral-200">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col items-center text-center">
            <span class="font-accent text-[10px] uppercase tracking-[0.5em] text-red-800 mb-8">Archives & Savoir</span>

            <h1 class="font-display text-5xl md:text-8xl font-extrabold text-black mb-10 tracking-tighter uppercase leading-[0.9]">
                Média <br>
                <span class="italic font-light serif text-red-900 lowercase" style="font-family: 'Cinzel', serif;">thèque</span>
            </h1>
            
            <p class="text-xl text-gray-400 max-w-2xl mx-auto font-light leading-relaxed italic mb-16">
                "Une immersion dans l'art et la spiritualité martiniquaise à travers des contenus sélectionnés."
            </p>

            {{-- Statistiques Minimalistes --}}
            <div class="flex gap-12 md:gap-24">
                @foreach(['Articles' => '150+', 'Vidéos' => '85', 'Audio' => '45'] as $label => $count)
                <div class="group">
                    <div class="text-3xl font-display font-light text-black mb-1 italic">{{ $count }}</div>
                    <div class="text-[9px] font-black text-red-900 uppercase tracking-widest opacity-60">{{ $label }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</header>

{{-- Barre de recherche & Filtres --}}
<section class="py-8 px-6 bg-neutral-50 border-b border-neutral-200">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-10">
            {{-- Recherche --}}
            <div class="w-full lg:max-w-md">
                <label class="text-[10px] font-black uppercase tracking-[0.3em] text-neutral-400 block mb-4">
                    Recherche
                </label>
                <input 
                    type="text" 
                    id="searchInput"
                    placeholder="Titre ou mot-clé..."
                    class="w-full border-b border-neutral-300 pb-4 text-lg font-light focus:outline-none focus:border-black transition-all"
                >
            </div>

            {{-- Filtres --}}
            <div class="flex gap-10 text-[11px] font-black uppercase tracking-widest">
                <button class="filter-btn active border-b-2 border-black pb-2" data-tab="all">Tout</button>
                <button class="filter-btn text-neutral-400 hover:text-black pb-2" data-tab="article">Articles</button>
                <button class="filter-btn text-neutral-400 hover:text-black pb-2" data-tab="video">Vidéos</button>
                <button class="filter-btn text-neutral-400 hover:text-black pb-2" data-tab="podcast">Audio</button>
            </div>
        </div>
    </div>
</section>

{{-- Grille de Ressources --}}
<section class="py-16 px-6 bg-neutral-50">
    <div class="max-w-7xl mx-auto">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-12" id="resourceGrid">
            @foreach($featuredResources as $res)
            <article 
                class="resource-card group transition-all duration-500 ease-out"
                data-type="{{ $res['type'] }}"
                data-title="{{ strtolower($res['title']) }}"
            >
                {{-- Image --}}
                <div class="relative overflow-hidden mb-6">
                    <img 
                        src="https://picsum.photos/seed/{{ $res['image'] }}/800/600"
                        alt="{{ $res['title'] }}"
                        class="w-full aspect-[16/10] object-cover transition-all duration-700 group-hover:scale-105"
                    >
                </div>

                {{-- Meta --}}
                <div class="flex items-center justify-between text-[9px] font-bold uppercase tracking-widest text-neutral-400 mb-3">
                    <span>{{ $res['type_label'] }}</span>
                    <span>{{ $res['duration'] }}</span>
                </div>

                {{-- Titre --}}
                <h3 class="text-lg font-bold uppercase tracking-tight mb-3 group-hover:text-red-900 transition-colors">
                    {{ $res['title'] }}
                </h3>

                {{-- Description --}}
                <p class="text-sm text-neutral-500 font-light leading-relaxed mb-6 line-clamp-2">
                    {{ $res['desc'] }}
                </p>

                {{-- Lien --}}
                <a 
                    href="{{ $res['url'] }}"
                    class="resource-link inline-flex items-center gap-3 text-[10px] font-black uppercase tracking-widest border-b border-neutral-200 pb-1 hover:border-black transition-all"
                    data-external="{{ $res['is_external'] ? 'true' : 'false' }}"
                >
                    {{ $res['is_external'] ? 'Consulter' : 'Lire' }}
                    <i class="fas {{ $res['is_external'] ? 'fa-external-link-alt' : 'fa-arrow-right' }} text-[8px]"></i>
                </a>
            </article>
            @endforeach
        </div>

        <div id="noResults" class="hidden py-20 text-center">
            <p class="text-xs font-black uppercase tracking-widest text-neutral-300">
                Aucun résultat trouvé
            </p>
        </div>
    </div>
</section>

{{-- Section "Nos actions en images" (anciennement "La parole en images") --}}
<section class="py-32 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="font-display text-4xl font-bold mb-20 tracking-tighter uppercase">Nos actions <span class="italic serif font-light lowercase" style="font-family: 'Cinzel', serif;">en images</span></h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($actionImages as $index => $action)
            <div class="group relative aspect-[3/4] overflow-hidden {{ $index % 2 != 0 ? 'lg:mt-12' : '' }}" style="border-radius: 120px 120px 20px 20px;">
                <img src="{{ asset('images/actions/' . $action['img'] . '.jpg') }}" class="absolute inset-0 w-full h-full object-cover scale-110 group-hover:scale-100 transition-all duration-[2s]">
                <div class="absolute inset-0 bg-gradient-to-t from-red-900/90 via-red-900/20 to-transparent"></div>
                <div class="absolute inset-x-0 bottom-0 p-10 text-left">
                    <h4 class="text-xl font-bold text-white text-[50px] mb-2 uppercase tracking-tighter">{{ $action['title'] }}</h4>
                    {{-- {soutitre } --}}
                    <h6 class="text-sm font-light italic text-white lowercase tracking-widest mb-4 mt-4">{{ $action['sub'] }}</h6>
                    <p class="text-red-200 text-[9px] font-bold uppercase tracking-[0.2em] opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0 transition-all duration-700">{{ $action['sub'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Section "Restez informé" (anciennement "Lettre d'information") --}}
<section class="py-32 px-6 bg-white">
    <div class="max-w-4xl mx-auto text-center">
        <div class="inline-block p-4 bg-red-50 rounded-full mb-10">
            <i class="far fa-envelope text-red-900"></i>
        </div>
        <h2 class="text-3xl font-bold tracking-tighter uppercase mb-6">Restez informé</h2>
        <p class="text-gray-500 font-light italic mb-12">Recevez l'essentiel du patrimoine directement dans votre boîte mail.</p>

        <form class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
            <input type="email" placeholder="votre@email.com" class="flex-grow px-8 py-5 border border-gray-100 rounded-full focus:ring-0 focus:border-red-900 text-sm font-light italic">
            <button class="px-10 py-5 bg-black text-white text-[10px] font-black uppercase tracking-[0.3em] rounded-full hover:bg-red-900 transition-all">S'abonner</button>
        </form>
    </div>
</section>

{{-- Modal pour les liens externes --}}
<div id="externalModal" class="fixed inset-0 z-[100] opacity-0 invisible transition-all duration-500">
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeExternalModal()"></div>
    <div class="relative min-h-screen flex items-center justify-center p-6">
        <div class="bg-white p-12 max-w-sm w-full text-center space-y-8" style="border-radius: 40px;">
            <div class="text-red-900"><i class="fas fa-external-link-alt text-3xl"></i></div>
            <h3 class="text-xl font-bold uppercase tracking-tighter">Vers le média externe</h3>
            <p class="text-sm text-gray-500 font-light italic leading-relaxed">Vous allez être redirigé vers une plateforme partenaire. Souhaitez-vous continuer l'immersion ?</p>
            <div class="flex flex-col gap-3">
                <button id="confirmExternal" class="w-full py-4 bg-black text-white text-[10px] font-black uppercase tracking-widest rounded-full hover:bg-red-900 transition-all">Continuer</button>
                <button onclick="closeExternalModal()" class="w-full py-4 text-[10px] font-black uppercase tracking-widest text-gray-400">Retour</button>
            </div>
        </div>
    </div>
</div>

<style>
.filter-btn.active { @apply bg-black text-white; }
.no-scrollbar::-webkit-scrollbar { display: none; }
.resource-card.hidden-item { 
    opacity: 0; 
    transform: translateY(30px); 
    pointer-events: none; 
    position: absolute; /* Pour éviter qu'il prenne de la place */
}
#externalModal.show { opacity: 1; visibility: visible; }
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.resource-card');
    const searchInput = document.getElementById('searchInput');
    const grid = document.getElementById('resourceGrid');
    const noResultsMsg = document.getElementById('noResults');

    // Assurer que la grille a une position relative pour les éléments absolus
    grid.style.position = 'relative';

    function filterContent() {
        const activeTab = document.querySelector('.filter-btn.active').getAttribute('data-tab');
        const searchTerm = searchInput.value.toLowerCase();
        let visibleCount = 0;

        cards.forEach(card => {
            const type = card.getAttribute('data-type');
            const title = card.getAttribute('data-title');
            const matchesTab = activeTab === 'all' || type === activeTab;
            const matchesSearch = title.includes(searchTerm);

            if (matchesTab && matchesSearch) {
                card.classList.remove('hidden-item');
                // S'assurer que la carte est en position static pour la grille
                card.style.position = 'static';
                visibleCount++;
            } else {
                card.classList.add('hidden-item');
            }
        });

        noResultsMsg.classList.toggle('hidden', visibleCount > 0);
    }

    buttons.forEach(btn => {
        btn.addEventListener('click', function() {
            buttons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            filterContent();
        });
    });

    searchInput.addEventListener('input', filterContent);

    document.querySelectorAll('.resource-link').forEach(link => {
        link.addEventListener('click', function(e) {
            if (this.getAttribute('data-external') === 'true') {
                e.preventDefault();
                externalUrl = this.href;
                document.getElementById('externalModal').classList.add('show');
            }
        });
    });

    document.getElementById('confirmExternal').addEventListener('click', () => {
        window.open(externalUrl, '_blank');
        closeExternalModal();
    });
});

let externalUrl = '';

function closeExternalModal() {
    document.getElementById('externalModal').classList.remove('show');
}
</script>

@endsection