@extends('layouts.app')

@section('title', 'Médiathèque - APACC-M')

@section('content')

@php
$featuredResources = [
[
'type' => 'article',
'type_label' => 'Étude',
'title' => "L'influence créole dans l'art sacré",
'desc' => "Une analyse de la fusion entre traditions chrétiennes et culture créole.",
'duration' => '15 min',
'image' => 'art-sacre',
'url' => '#',
'is_external' => false
],
[
'type' => 'video',
'type_label' => 'Documentaire',
'title' => "Églises historiques de Martinique",
'desc' => "Documentaire captivant sur l'architecture et l'histoire des clochers de l'île.",
'duration' => '45 min',
'image' => 'eglises',
'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
'is_external' => true
],
[
'type' => 'podcast',
'type_label' => 'Audio',
'title' => "Épisode 12: Le chant créole",
'desc' => "Découvrez l'histoire fascinante des chants religieux en langue régionale.",
'duration' => '35 min',
'image' => 'chants',
'url' => 'https://open.spotify.com/episode/123',
'is_external' => true
],
[
'type' => 'article',
'type_label' => 'Chronique',
'title' => "Le patrimoine religieux",
'desc' => "Exploration des trésors cachés du patrimoine sacré martiniquais.",
'duration' => '20 min',
'image' => 'patrimoine',
'url' => '#',
'is_external' => false
],
[
'type' => 'video',
'type_label' => 'Archive',
'title' => "Fête du Saint-Esprit 2024",
'desc' => "Les moments forts de la célébration annuelle à Sainte-Marie.",
'duration' => '30 min',
'image' => 'fete-2024',
'url' => 'https://vimeo.com/123456789',
'is_external' => true
],
[
'type' => 'article',
'type_label' => 'Décodage',
'title' => "Symboles du christianisme créole",
'desc' => "Décodage des signes et symboles uniques à la culture martiniquaise.",
'duration' => '25 min',
'image' => 'symboles',
'url' => '#',
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
                class="resource-card group"
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
{{-- Section Parole en Images --}}

<section class="py-32 bg-gray-50">
<div class="max-w-7xl mx-auto px-6 text-center">
<h2 class="font-display text-4xl font-bold mb-20 tracking-tighter uppercase">La Parole <span class="italic serif font-light lowercase" style="font-family: 'Cinzel', serif;">en images</span></h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        @foreach($bibleTexts as $index => $bible)
        <div class="group relative aspect-[3/4] overflow-hidden {{ $index % 2 != 0 ? 'lg:mt-12' : '' }}" style="border-radius: 120px 120px 20px 20px;">
            <img src="https://picsum.photos/seed/{{ $bible['img'] }}/600/800" class="absolute inset-0 w-full h-full object-cover scale-110 group-hover:scale-100 transition-all duration-[2s] grayscale">
            <div class="absolute inset-0 bg-gradient-to-t from-red-900/90 via-red-900/20 to-transparent"></div>
            <div class="absolute inset-x-0 bottom-0 p-10 text-left">
                <h4 class="text-xl font-bold text-white mb-2 uppercase tracking-tighter">{{ $bible['title'] }}</h4>
                <p class="text-red-200 text-[9px] font-bold uppercase tracking-[0.2em] opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0 transition-all duration-700">{{ $bible['sub'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>


</section>

{{-- Newsletter --}}

<section class="py-32 px-6 bg-white">
<div class="max-w-4xl mx-auto text-center">
<div class="inline-block p-4 bg-red-50 rounded-full mb-10">
<i class="far fa-envelope text-red-900"></i>
</div>
<h2 class="text-3xl font-bold tracking-tighter uppercase mb-6">Lettre d'Information</h2>
<p class="text-gray-500 font-light italic mb-12">Recevez l'essentiel du patrimoine directement dans votre boîte mail.</p>

    <form class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
        <input type="email" placeholder="votre@email.com" class="flex-grow px-8 py-5 border border-gray-100 rounded-full focus:ring-0 focus:border-red-900 text-sm font-light italic">
        <button class="px-10 py-5 bg-black text-white text-[10px] font-black uppercase tracking-[0.3em] rounded-full hover:bg-red-900 transition-all">S'abonner</button>
    </form>
</div>


</section>

{{-- Modal --}}

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
.resource-card { transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1); }
.resource-card.hidden-item { opacity: 0; transform: translateY(30px); pointer-events: none; }
#externalModal.show { opacity: 1; visibility: visible; }

.filter-btn.active {
    border-color: black;
    color: black;
}
</style>

<script>
let externalUrl = '';

document.addEventListener(&#39;DOMContentLoaded&#39;, () =&gt; {
    const buttons = document.querySelectorAll(&#39;.filter-btn&#39;);
    const cards = document.querySelectorAll(&#39;.resource-card&#39;);
    const searchInput = document.getElementById(&#39;searchInput&#39;);

    function filterContent() {
        const activeTab = document.querySelector(&#39;.filter-btn.active&#39;).getAttribute(&#39;data-tab&#39;);
        const searchTerm = searchInput.value.toLowerCase();
        let hasResults = false;

        cards.forEach(card =&gt; {
            const type = card.getAttribute(&#39;data-type&#39;);
            const title = card.getAttribute(&#39;data-title&#39;);
            const matchesTab = activeTab === &#39;all&#39; || type === activeTab;
            const matchesSearch = title.includes(searchTerm);

            if (matchesTab &amp;&amp; matchesSearch) {
                card.classList.remove(&#39;hidden-item&#39;, &#39;hidden&#39;);
                hasResults = true;
            } else {
                card.classList.add(&#39;hidden-item&#39;, &#39;hidden&#39;);
            }
        });
        document.getElementById(&#39;noResults&#39;).classList.toggle(&#39;hidden&#39;, hasResults);
    }

    buttons.forEach(btn =&gt; {
        btn.addEventListener(&#39;click&#39;, function() {
            buttons.forEach(b =&gt; b.classList.remove(&#39;active&#39;));
            this.classList.add(&#39;active&#39;);
            filterContent();
        });
    });

    searchInput.addEventListener(&#39;input&#39;, filterContent);

    document.querySelectorAll(&#39;.resource-link&#39;).forEach(link =&gt; {
        link.addEventListener(&#39;click&#39;, function(e) {
            if (this.getAttribute(&#39;data-external&#39;) === &#39;true&#39;) {
                e.preventDefault();
                externalUrl = this.href;
                document.getElementById(&#39;externalModal&#39;).classList.add(&#39;show&#39;);
            }
        });
    });

    document.getElementById(&#39;confirmExternal&#39;).addEventListener(&#39;click&#39;, () =&gt; {
        window.open(externalUrl, &#39;_blank&#39;);
        closeExternalModal();
    });
});

function closeExternalModal() {
    document.getElementById(&#39;externalModal&#39;).classList.remove(&#39;show&#39;);
}


</script>

@endsection