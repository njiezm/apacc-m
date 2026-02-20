@extends('layouts.app')

@section('title', 'Événements - APACC-M Martinique')

@section('content')

@php
// CONFIGURATION DES ÉVÉNEMENTS - Design Narthex
$events = [
[
'title' => 'Atelier (réservé aux adultes)',
'date' => '28 Février 2026',
'time' => '9h00 - 13h00',
'location' => 'Saint-Christophe',
'category' => 'workshop',
'category_label' => 'Atelier',
'image' => 'atelier28',
'description' => 'Plongez dans l’élégance de l’écriture à la plume et découvrez les bases de la calligraphie italique, telle qu’elle se pratiquait au XVIᵉ siècle.  Lors de cet atelier d’initiation, vous apprendrez à former les minuscules et majuscules, à manier la plume avec précision et à goûter à la beauté du geste lent et maîtrisé.'
],
[
'title' => 'Concert',
'date' => '8 Juin 2026',
'time' => '14h00 - 17h00',
'location' => 'Centre culturel, FDF',
'category' => 'concert',
'category_label' => 'Concert',
'image' => 'concertexemple',
'description' => 'Initiation à l\'art des icônes chrétiennes avec une touche martiniquaise.'
],
[
'title' => 'Patrimoine religieux',
'date' => '5 Juin 2026',
'time' => '18h00 - 20h00',
'location' => 'Médiathèque, Schoelcher',
'category' => 'conference',
'category_label' => 'Conférence',
'image' => 'conference1',
'description' => 'Conférence sur l\'histoire et la préservation du patrimoine religieux de l\'île.'
]
];
@endphp

{{-- Hero Section - Style Galerie --}}

<header class="pt-24 pb-28 px-6 text-center relative overflow-hidden bg-neutral-900 text-white">

    {{-- Motif subtil inspiré fer forgé créole --}}
    <div class="absolute inset-0 opacity-5 pointer-events-none">
        <svg width="100%" height="100%">
            <pattern id="motif" patternUnits="userSpaceOnUse" width="80" height="80">
                <path d="M40 0 L40 80 M0 40 L80 40" stroke="white" stroke-width="0.5"/>
                <circle cx="40" cy="40" r="10" stroke="white" fill="none" stroke-width="0.5"/>
            </pattern>
            <rect width="100%" height="100%" fill="url(#motif)" />
        </svg>
    </div>

    <div class="relative z-10 max-w-4xl mx-auto">
        <span class="font-accent text-[10px] uppercase tracking-[0.4em] text-red-500 mb-4 block">
            Agenda Culturel
        </span>

        <div class="h-[1px] w-16 bg-red-800 mx-auto mb-10"></div>

        <h1 class="text-5xl md:text-6xl font-extrabold leading-tight tracking-tight uppercase">
            Nos
            <span class="italic font-light text-red-600 lowercase block mt-2"
                  style="font-family: 'Cinzel', serif;">
                Événements
            </span>
        </h1>

        <p class="text-neutral-300 mt-8 max-w-xl mx-auto italic text-lg">
            "Célébrer la foi à travers l'expression artistique et le partage."
        </p>
    </div>

</header>

{{-- Barre de Filtre - Minimaliste --}}

<div class="max-w-4xl mx-auto px-6 mb-24 relative z-30 mt-5">
<div class="flex flex-wrap justify-center gap-8 border-b border-gray-100 pb-6">
<button onclick="filterEvents('all', this)" class="filter-btn text-[10px] font-black uppercase tracking-widest text-red-900 border-b-2 border-red-900 pb-2 transition-all">
Tous
</button>
<button onclick="filterEvents('concert', this)" class="filter-btn text-[10px] font-black uppercase tracking-widest text-gray-400 hover:text-black pb-2 transition-all">
Concerts
</button>
<button onclick="filterEvents('workshop', this)" class="filter-btn text-[10px] font-black uppercase tracking-widest text-gray-400 hover:text-black pb-2 transition-all">
Ateliers
</button>
<button onclick="filterEvents('conference', this)" class="filter-btn text-[10px] font-black uppercase tracking-widest text-gray-400 hover:text-black pb-2 transition-all">
Conférences
</button>
</div>
</div>

<section class="pb-24 px-6 bg-white">
    <div class="max-w-7xl mx-auto">
        <div id="eventsGrid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-16">

            @foreach($events as $event)
            <article class="event-card group transform transition-all duration-700" data-category="{{ $event['category'] }}">
                {{-- Image en forme d'Arche --}}
                <div class="arch-container w-full mb-8 overflow-hidden transition-transform duration-700 group-hover:shadow-lg">
                    <div class="overflow-hidden" style="border-radius: 50% 50% 0 0 / 40% 40% 0 0;">
                        @php
                            // On gère automatiquement l'extension
                            $imagePath = file_exists(public_path('images/'.$event['image'].'.png')) 
                                         ? 'images/'.$event['image'].'.png' 
                                         : (file_exists(public_path('images/'.$event['image'].'.jpeg')) 
                                            ? 'images/'.$event['image'].'.jpeg' 
                                            : 'images/default-event.jpeg'); // image par défaut si aucune trouvée
                        @endphp
                        <img src="{{ asset($imagePath) }}"
                             alt="{{ $event['title'] }}"
                             class="w-full aspect-[3/4] object-cover transition-transform duration-1000 group-hover:scale-110 grayscale hover:grayscale-0">
                    </div>
                </div>

                <div class="space-y-4 px-2">
                    <div class="flex items-center gap-4">
                        <span class="text-[9px] font-black uppercase tracking-widest text-red-700">{{ $event['category_label'] }}</span>
                        <span class="h-[1px] w-4 bg-gray-200"></span>
                        <span class="text-[9px] font-bold uppercase tracking-widest text-gray-400">{{ $event['date'] }}</span>
                    </div>
                    
                    <h3 class="text-xl font-bold leading-tight group-hover:text-red-900 transition-colors uppercase tracking-tighter">
                        {{ $event['title'] }}
                    </h3>
                    
                    <p class="text-sm text-gray-500 font-light leading-relaxed line-clamp-2 italic">
                        {{ $event['description'] }}
                    </p>
                    
                    <div class="pt-4 space-y-2">
                        <div class="flex items-center gap-3 text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                            <i class="far fa-clock text-red-300"></i>
                            {{ $event['time'] }}
                        </div>
                        <div class="flex items-center gap-3 text-[10px] font-bold text-gray-400 uppercase tracking-widest">
                            <i class="fas fa-map-marker-alt text-red-300"></i>
                            {{ $event['location'] }}
                        </div>
                    </div>

                    <div class="pt-8">
                        <a href="{{ route('contact') }}" class="inline-block w-full text-center py-4 border border-gray-100 text-[10px] font-black uppercase tracking-[0.2em] hover:bg-black hover:text-white transition-all duration-500">
                            S'inscrire
                        </a>
                    </div>
                </div>
            </article>
            @endforeach

        </div>
    </div>
</section>

{{-- Script de filtrage --}}

<script>
function filterEvents(category, btn) {
// 1. Mise à jour visuelle des boutons
document.querySelectorAll('.filter-btn').forEach(b => {
b.classList.remove('text-red-900', 'border-red-900', 'border-b-2');
b.classList.add('text-gray-400');
});
btn.classList.add('text-red-900', 'border-red-900', 'border-b-2');
btn.classList.remove('text-gray-400');

    // 2. Filtrage des cartes
    document.querySelectorAll(&#39;.event-card&#39;).forEach(card =&gt; {
        if(category === &#39;all&#39; || card.getAttribute(&#39;data-category&#39;) === category) {
            card.style.display = &#39;block&#39;;
            setTimeout(() =&gt; { 
                card.style.opacity = &#39;1&#39;; 
                card.style.transform = &#39;translateY(0)&#39;; 
            }, 10);
        } else {
            card.style.opacity = &#39;0&#39;;
            card.style.transform = &#39;translateY(20px)&#39;;
            setTimeout(() =&gt; { card.style.display = &#39;none&#39;; }, 500);
        }
    });
}


</script>

@endsection