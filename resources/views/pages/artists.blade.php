@extends('layouts.app')

@section('title', 'Réseau d\'Artistes - APACC-M')

@section('content')

<section class="py-24 px-6 max-w-7xl mx-auto">
{{-- En-tête de section --}}
<header class="mb-24 text-center">
<div class="flex flex-col items-center mb-10">
<span class="font-accent text-[10px] uppercase tracking-[0.4em] text-red-800 mb-6">Communauté Créative</span>
<div class="h-[1px] w-12 bg-red-200 mb-10"></div>

        <h2 class="font-display text-4xl md:text-6xl font-extrabold text-black mb-10 leading-[1.1] tracking-tighter uppercase">
            Réseau <br>
            <span class="italic font-light serif text-red-900 lowercase" style="font-family: 'Cinzel', serif;">d'Artistes</span>
        </h2>
        
        <p class="text-xl text-gray-500 max-w-3xl mx-auto font-light leading-relaxed italic">
            "Notre réseau rassemble des créateurs martiniquais et de martinique s'inspirant de la culture chrétienne. Découvrez leurs talents et soutenez la création locale."
        </p>
    </div>
</header>

{{-- Barre de recherche --}}
<div class="mb-8 max-w-md mx-auto">
    <div class="relative">
        <input type="text" id="searchInput" placeholder="Rechercher un artiste..." 
               class="w-full px-4 py-3 pr-10 border border-gray-300 rounded-lg focus:outline-none focus:border-red-900 transition-colors">
        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </div>
    </div>
</div>

{{-- Conteneur principal avec barre alphabétique et grille d'artistes --}}
<div class="flex flex-col md:flex-row gap-8">
    {{-- Barre alphabétique sur le côté --}}
    <div class="md:w-16 flex-shrink-0">
        <div class="sticky top-24 bg-white border border-gray-200 rounded-lg p-2 shadow-sm">
            <p class="text-xs text-center text-gray-500 mb-2 font-bold">FILTRER</p>
            <div class="flex flex-row md:flex-col flex-wrap justify-center md:justify-start gap-1" id="alphabetFilter">
                @for($i = 65; $i <= 90; $i++)
                    <button class="alphabet-btn w-8 h-8 text-xs font-bold text-gray-600 hover:bg-red-50 hover:text-red-900 rounded transition-colors" data-letter="{{ chr($i) }}">
                        {{ chr($i) }}
                    </button>
                @endfor
                <button class="alphabet-btn w-8 h-8 text-xs font-bold text-gray-600 hover:bg-red-50 hover:text-red-900 rounded transition-colors" data-letter="all">
                    Tous
                </button>
            </div>
        </div>
    </div>

    {{-- Grille des Artistes --}}
    <div class="flex-grow">
        <div class="grid md:grid-cols-2 gap-16 mb-32" id="artistsGrid">
            @php
                // Récupération des artistes
                $artists = [
                    [
                        'firstname' => 'Victor',
                        'lastname' => 'ANICET',
                        'desc' => 'Artiste créateur dont l\'œuvre puise dans les traditions et la spiritualité martiniquaise.',
                        'tags' => ['Vitrailliste', 'Ceramiste'],
                        'photo' => 'victor_anicet.jpg',
                        'oeuvre' => 'victor_anicet_oeuvre1.jpg',
                        'gallery' => ['victor_anicet_oeuvre1.jpg'],
                        'links' => [
                            ['url' => 'http://ladoration.fr/vanicet', 'text' => 'Mes œuvres']
                        ]
                    ],
                    [
                        'name' => 'Danielle   Guiteaud',
                        'firstname' => 'Danielle',
                        'lastname' => 'Guiteaud ',
                        'desc' => 'Artiste multidisciplinaire explorant les thèmes de la spiritualité et de l\'identité martiniquaise.',
                        'tags' => ['Peinture', 'Art Sacré'],
                        'photo' => 'danielle_guiteau.jpg',
                        'oeuvre' => 'danielle_guiteau_oeuvre6.jpg',
                        'gallery' => [ 'danielle_guiteau_oeuvre7.jpg', 'danielle_guiteau_oeuvre9.jpg', 'danielle_guiteau_oeuvre5.jpg','danielle_guiteau_oeuvre8.jpg'],
                        'links' => [
                            ['url' => 'https://danielled.art/', 'text' => 'Portfolio'],
                            ['url' => 'https://www.facebook.com/share/1CAf94dANK/', 'text' => 'Facebook']
                        ]
                    ],
                    [
                        'name' => 'Yveline   Guillon',
                        'firstname' => 'Yveline',
                        'lastname' => 'Guillon',
                        'desc' => 'Artiste explorant les paysages et les symboles de la Martinique à travers une approche contemporaine.',
                        'tags' => ['Peinture', 'Art Contemporain'],
                        'photo' => 'yveline_guillon.jpg',
                        'oeuvre' => 'yveline_guillon_oeuvre1.jpg',
                        'gallery' => ['yveline_guillon_oeuvre1.jpg', 'yveline_guillon_oeuvre2.jpg', 'yveline_guillon_oeuvre3.jpg', 'yveline_guillon_oeuvre4.jpg'],
                        'links' => []
                    ],
                    [
                        'name' => 'Joel   JEAN-PIERRE',
                        'firstname' => 'Joel',
                        'lastname' => 'JEAN-PIERRE',
                        'desc' => 'Photographe capturant la lumière et l\'essence de la Martinique à travers son objectif.',
                        'tags' => ['Photographie', 'Art Visuel'],
                        'photo' => 'joel_jean_pierre.jpg',
                        'oeuvre' => 'joel_jean_pierre_pp.jpg',
                        'gallery' => ['joel_jean_pierre_oeuvre1.jpg', 'joel_jean_pierre_oeuvre2.jpg', 'joel_jean_pierre_oeuvre3.jpg', 'joel_jean_pierre_oeuvre4.jpg'],
                        'links' => []
                    ],
                    [
                        'name' => 'Jaqueline   HAUSTANT',
                        'firstname' => 'Jaqueline',
                        'lastname' => 'HAUSTANT',
                        'desc' => 'Artiste potière, elle façonne la terre pour donner vie à des pièces uniques, inspirées par les formes et les couleurs de la Martinique.',
                        'tags' => ['Céramique', 'Artisanat d\'Art'],
                        'photo' => 'jaqueline_haustant.jpg',
                        'oeuvre' => 'jaqueline_haustant_oeuvre1.jpg',
                        'gallery' => ['jaqueline_haustant_oeuvre1.jpg', 'jaqueline_haustant_oeuvre2.jpg', 'jaqueline_haustant_oeuvre3.jpg', 'jaqueline_haustant_oeuvre4.jpg'],
                        'links' => []
                    ],
                    [
                        'name' => 'Eric   CHAUVINEAU',
                        'firstname' => 'Eric',
                        'lastname' => 'CHAUVINEAU',
                        'desc' => 'Artiste vitrailliste et enlumineur, il crée des œuvres inspirées par les traditions artistiques de la Martinique.',
                        'tags' => ['Vitrail', 'Enluminure'],
                        'photo' => 'eric_chauvineau.jpg',
                        'oeuvre' => 'eric_chauvineau_oeuvre1.jpg',
                        'gallery' => ['eric_chauvineau_oeuvre1.jpg', 'eric_chauvineau_oeuvre2-b.jpg', 'eric_chauvineau_oeuvre3.jpg', 'eric_chauvineau_oeuvre4.jpg'],
                        'links' => [
                            ['url' => 'https://www.vitrailmartinique.com/', 'text' => 'Portfolio']
                        ]
                    ]
                ];
                
                // Trier les artistes par ordre alphabétique (nom de famille)
                usort($artists, function($a, $b) {
                    return strcmp(trim($a['lastname']), trim($b['lastname']));
                });
            @endphp

            @foreach($artists as $index => $artist)
            <div class="artist-card group bg-white border border-neutral-200 p-8 hover:shadow-xl transition-all duration-500" data-letter="{{ strtoupper(substr(trim($artist['lastname']), 0, 1)) }}" data-name="{{ strtolower($artist['firstname'] . ' ' . $artist['lastname']) }}">
                <div class="flex flex-col md:flex-row gap-8">
                    {{-- Photo de l'artiste dans un cercle --}}
                    <div class="flex-shrink-0">
                        <div class="w-32 h-32 md:w-40 md:h-40 rounded-full overflow-hidden mx-auto md:mx-0 border-4 border-red-100">
                            <img src="{{ asset('images/artistes/' . $artist['photo']) }}" 
                                 alt="{{ $artist['firstname'] }} {{ $artist['lastname'] }}" 
                                 class="w-full h-full object-cover">
                        </div>
                    </div>
                    
                    <div class="flex-grow">
                        <div class="flex justify-center gap-2 mb-4">
                            @foreach($artist['tags'] as $tag)
                                <span class="text-[9px] font-bold uppercase tracking-widest text-red-700 px-2 py-1 bg-red-50 rounded">{{ $tag }}</span>
                            @endforeach
                        </div>
                        
                        <h3 class="text-2xl font-bold tracking-tighter uppercase group-hover:text-red-900 transition-colors text-center md:text-left">
                           <span class="mr-3">{{ $artist['firstname'] }}</span>
    <span class="tracking-widest">{{ $artist['lastname'] }}</span>
                        </h3>
                        
                        <p class="text-sm text-gray-500 font-light leading-relaxed italic mt-4 text-center md:text-left">
                            {{ $artist['desc'] }}
                        </p>
                        
                        {{-- Photo de l'œuvre principale --}}
                        <div class="mt-6 mb-6 overflow-hidden rounded-lg">
                            <img src="{{ asset('images/artistes/' . $artist['oeuvre']) }}" 
                                 alt="Œuvre de {{ $artist['firstname'] }} {{ $artist['lastname'] }}" 
                                 class="w-full h-64 object-cover cursor-pointer hover:scale-105 transition-all duration-700"
                                 data-bs-toggle="modal" 
                                 data-bs-target="#artistModal{{ $index }}">
                            <p class="text-xs text-gray-400 mt-2 text-center">Cliquez pour voir les œuvres</p>
                        </div>
                        
                        {{-- Liens vers les œuvres --}}
                        <div class="flex flex-wrap gap-3 justify-center md:justify-start pt-2">
                            @foreach($artist['links'] as $link)
                                <a href="{{ $link['url'] }}" target="_blank" class="text-[10px] font-black uppercase tracking-[0.3em] text-black border-b border-gray-200 pb-1 hover:border-red-900 hover:text-red-900 transition-all">
                                    {{ $link['text'] }} →
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        {{-- Message si aucun artiste trouvé --}}
        <div id="noResults" class="hidden text-center py-12">
            <p class="text-gray-500 text-lg">Aucun artiste ne correspond à votre recherche.</p>
        </div>
    </div>
</div>

{{-- Appel aux artistes (Style Solennel) --}}
<div class="bg-black text-white p-12 md:p-24 text-center relative overflow-hidden mt-5">
    <div class="relative z-10 max-w-2xl mx-auto">
        <h3 class="font-display text-3xl md:text-5xl font-bold mb-8 uppercase tracking-tighter italic" style="font-family: 'Cinzel', serif;">Vous êtes artiste ?</h3>
        <p class="mb-12 text-gray-400 font-light text-lg leading-relaxed">
            Partagez votre talent et rejoignez une communauté engagée pour le rayonnement de notre culture chrétienne.
        </p>
        <a href="{{ route('contact') }}" class="inline-block px-12 py-5 border border-white/20 text-[11px] font-bold uppercase tracking-[0.3em] hover:bg-white hover:text-black transition-all duration-500">
            Rejoindre le réseau
        </a>
    </div>
    
    {{-- Décoration minimaliste --}}
    <div class="absolute top-0 right-0 w-64 h-64 bg-red-900/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-red-900/10 rounded-full blur-3xl"></div>
</div>

</section>

{{-- Modals pour les galeries d'artistes --}}
@foreach($artists as $index => $artist)
    <div class="modal fade" id="artistModal{{ $index }}" tabindex="-1" aria-labelledby="artistModalLabel{{ $index }}" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="artistModalLabel{{ $index }}">Œuvres de {{ $artist['firstname'] }} {{ $artist['lastname'] }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        @if(isset($artist['gallery']))
                            @foreach($artist['gallery'] as $photo)
                            <div class="col-md-6">
                                <img src="{{ asset('images/artistes/' . $photo) }}" 
                                     alt="Œuvre de {{ $artist['firstname'] }} {{ $artist['lastname'] }}" 
                                     class="img-fluid rounded">
                            </div>
                            @endforeach
                        @else
                            <div class="col-md-12">
                                <img src="{{ asset('images/artistes/' . $artist['oeuvre']) }}" 
                                     alt="Œuvre de {{ $artist['firstname'] }} {{ $artist['lastname'] }}" 
                                     class="img-fluid rounded">
                            </div>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    @foreach($artist['links'] as $link)
                        <a href="{{ $link['url'] }}" target="_blank" class="btn btn-outline-secondary btn-sm">
                            {{ $link['text'] }}
                        </a>
                    @endforeach
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Récupération des éléments DOM
    const searchInput = document.getElementById('searchInput');
    const alphabetButtons = document.querySelectorAll('.alphabet-btn');
    const artistCards = document.querySelectorAll('.artist-card');
    const noResultsMessage = document.getElementById('noResults');
    
    // Fonction pour filtrer les artistes
    function filterArtists() {
        const searchTerm = searchInput.value.toLowerCase();
        const activeLetter = document.querySelector('.alphabet-btn.active')?.dataset.letter || 'all';
        let hasResults = false;
        
        artistCards.forEach(card => {
            const artistName = card.dataset.name;
            const artistLetter = card.dataset.letter;
            
            // Vérifier si le nom correspond à la recherche et à la lettre sélectionnée
            const matchesSearch = artistName.includes(searchTerm);
            const matchesLetter = activeLetter === 'all' || artistLetter === activeLetter;
            
            if (matchesSearch && matchesLetter) {
                card.style.display = 'block';
                hasResults = true;
            } else {
                card.style.display = 'none';
            }
        });
        
        // Afficher ou masquer le message "aucun résultat"
        if (hasResults) {
            noResultsMessage.classList.add('hidden');
        } else {
            noResultsMessage.classList.remove('hidden');
        }
    }
    
    // Écouteur d'événement pour la barre de recherche
    searchInput.addEventListener('input', filterArtists);
    
    // Écouteurs d'événements pour les boutons alphabétiques
    alphabetButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Désactiver tous les boutons et activer celui cliqué
            alphabetButtons.forEach(btn => btn.classList.remove('active', 'bg-red-100', 'text-red-900'));
            this.classList.add('active', 'bg-red-100', 'text-red-900');
            
            // Filtrer les artistes
            filterArtists();
        });
    });
    
    // Activer le bouton "Tous" par défaut
    document.querySelector('.alphabet-btn[data-letter="all"]').classList.add('active', 'bg-red-100', 'text-red-900');
});
</script>

@endsection