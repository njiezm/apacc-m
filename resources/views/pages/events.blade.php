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
        'category' => 'atelier',
        'category_label' => 'Atelier',
        'image' => 'atelier28',
        'description' => 'Plongez dans l\'élégance de l\'écriture à la plume et découvrez les bases de la calligraphie italique, telle qu\'elle se pratiquait au XVIᵉ siècle. Lors de cet atelier d\'initiation, vous apprendrez à former les minuscules et majuscules, à manier la plume avec précision et à goûter à la beauté du geste lent et maîtrisé.',
        'registration_deadline' => '2026-02-25'
    ],
    [
        'title' => 'Concert de Pâques',
        'date' => '21 Juin 2025',
        'time' => '14h00 - 17h00',
        'location' => 'Centre culturel, FDF',
        'category' => 'concert',
        'category_label' => 'Concert',
        'image' => 'concertexemple',
        'description' => 'Un concert spirituel en l\'honneur de Pâques, mêlant chorales gospel et pièces de musique sacrée classique.',
        'registration_deadline' => '2025-06-20'
    ],
    [
        'title' => 'N° 5 de la revue TRANSANDAS',
        'date' => '15 Mars 2026',
        'time' => 'N/A',
        'location' => 'Martinique',
        'category' => 'revue',
        'category_label' => 'Revue',
        'image' => 'transandas5',
        'description' => 'Découvrez le dernier numéro de notre revue dédiée au patrimoine religieux martiniquais, avec des articles inédits et des analyses approfondies.',
        'registration_deadline' => '2026-02-28'
    ],
    [
        'title' => 'Festival de l\'Art Sacré 2025',
        'date' => '10 Juin 2025',
        'time' => 'Toute la journée',
        'location' => 'Divers lieux en Martinique',
        'category' => 'festival',
        'category_label' => 'Festival',
        'image' => 'festival2025',
        'description' => 'Retour sur notre festival annuel qui a rassemblé des artistes locaux et internationaux autour de l\'art sacré.',
        'registration_deadline' => '2025-05-31'
    ],
    [
        'title' => 'Conférence : "L\'icône, fenêtre sur l\'invisible"',
        'date' => '5 Mai 2025',
        'time' => '18h00',
        'location' => 'Médiathèque de Schoelcher',
        'category' => 'conference',
        'category_label' => 'Conférence',
        'image' => 'conferenceicone',
        'description' => 'Une conférence immersive pour comprendre la théologie et la technique derrière la création d\'icônes.',
        'registration_deadline' => '2025-05-02'
    ],
    [
        'title' => 'Circuit découverte : Les églises du Sud',
        'date' => '20 Avril 2025',
        'time' => '8h00 - 18h00',
        'location' => 'Départ de FDF',
        'category' => 'circuits',
        'category_label' => 'Circuits découvertes',
        'image' => 'circuitsud',
        'description' => 'Une journée guidée à la découverte du patrimoine architectural et artistique des églises du sud de l\'île.',
        'registration_deadline' => '2025-04-17'
    ],
    [
        'title' => 'Rencontre avec l\'artiste',
        'date' => '12 Mars 2025',
        'time' => '16h00',
        'location' => 'Galerie APACC-M',
        'category' => 'rencontres',
        'category_label' => 'Rencontres',
        'image' => 'rencontreartiste',
        'description' => 'Venez échanger avec un artiste local sur son processus créatif et l\'inspiration de la foi dans son œuvre.',
        'registration_deadline' => '2025-03-10'
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
<div class="max-w-6xl mx-auto px-6 mb-24 relative z-30 mt-5">
    <div class="flex flex-wrap justify-center gap-6 md:gap-8 border-b border-gray-100 pb-6">
        <button onclick="filterEvents('all', this)" class="filter-btn text-[10px] font-black uppercase tracking-widest text-red-900 border-b-2 border-red-900 pb-2 transition-all">
            Tous
        </button>
        <button onclick="filterEvents('atelier', this)" class="filter-btn text-[10px] font-black uppercase tracking-widest text-gray-400 hover:text-black pb-2 transition-all">
            Ateliers
        </button>
        <button onclick="filterEvents('concert', this)" class="filter-btn text-[10px] font-black uppercase tracking-widest text-gray-400 hover:text-black pb-2 transition-all">
            Concerts
        </button>
        <button onclick="filterEvents('conference', this)" class="filter-btn text-[10px] font-black uppercase tracking-widest text-gray-400 hover:text-black pb-2 transition-all">
            Conférences
        </button>
        <button onclick="filterEvents('festival', this)" class="filter-btn text-[10px] font-black uppercase tracking-widest text-gray-400 hover:text-black pb-2 transition-all">
            Festivals
        </button>
        <button onclick="filterEvents('revue', this)" class="filter-btn text-[10px] font-black uppercase tracking-widest text-gray-400 hover:text-black pb-2 transition-all">
            Revues
        </button>
        <button onclick="filterEvents('circuits', this)" class="filter-btn text-[10px] font-black uppercase tracking-widest text-gray-400 hover:text-black pb-2 transition-all">
            Circuits
        </button>
        <button onclick="filterEvents('rencontres', this)" class="filter-btn text-[10px] font-black uppercase tracking-widest text-gray-400 hover:text-black pb-2 transition-all">
            Rencontres
        </button>
    </div>
</div>

<section class="pb-24 px-6 bg-white">
    <div class="max-w-7xl mx-auto">
        <div id="eventsGrid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-16">
            @foreach($events as $event)
            @php
                // Vérifier si la date limite d'inscription est passée
                $isPastDeadline = false;
                if (isset($event['registration_deadline'])) {
                    $today = new DateTime();
                    $deadline = new DateTime($event['registration_deadline']);
                    $isPastDeadline = $today > $deadline;
                }

                // === MODIFICATION : Masquer les événements après le 3ème par défaut ===
                $isHidden = $loop->iteration > 3;
            @endphp
            <article class="event-card group transform transition-all duration-700 {{ $isHidden ? 'hidden-event' : '' }}" data-category="{{ $event['category'] }}">
                {{-- Image en forme d'Arche --}}
                <div class="arch-container w-full mb-8 overflow-hidden transition-transform duration-700 group-hover:shadow-lg">
                    <div class="overflow-hidden" style="border-radius: 50% 50% 0 0 / 40% 40% 0 0;">
                        @php
                            $imagePath = file_exists(public_path('images/'.$event['image'].'.png')) 
                                         ? 'images/'.$event['image'].'.png' 
                                         : (file_exists(public_path('images/'.$event['image'].'.jpeg')) 
                                            ? 'images/'.$event['image'].'.jpeg' 
                                            : 'images/default-event.jpeg');
                        @endphp
                        <img src="{{ asset($imagePath) }}"
                             alt="{{ $event['title'] }}"
                             class="w-full aspect-[3/4] object-cover transition-all duration-700 group-hover:scale-110 hover:grayscale">
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
                        @if($isPastDeadline)
                        <button disabled class="inline-block w-full text-center py-4 border border-gray-100 text-[10px] font-black uppercase tracking-[0.2em] bg-gray-100 text-gray-400 cursor-not-allowed">
                            Inscriptions closes
                        </button>
                        @else
                        <a href="{{ route('contact') }}" class="inline-block w-full text-center py-4 border border-gray-100 text-[10px] font-black uppercase tracking-[0.2em] hover:bg-black hover:text-white transition-all duration-500">
                            S'inscrire
                        </a>
                        @endif
                    </div>
                </div>
            </article>

            {{-- Flèche de défilement après le 3ème événement --}}
            @if($loop->iteration == 3)
            {{-- === MODIFICATION : Ajout d'un ID et d'un curseur pour le clic === --}}
            <div id="discoverMore" class="col-span-full flex flex-col items-center justify-center py-16 cursor-pointer">
                <p class="text-[10px] font-black uppercase tracking-widest text-gray-400 mb-6">Découvrir la suite</p>
                <div class="animate-bounce">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 26L14 20L15.4 18.6L20 23.2L24.6 18.6L26 20L20 26Z" fill="#DC2626"/>
                        <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#DC2626" stroke-opacity="0.3"/>
                    </svg>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>

{{-- Section Agenda et Calendrier --}}
<section class="py-24 px-6 bg-gray-50">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-16">
            <span class="font-accent text-[10px] uppercase tracking-[0.4em] text-red-800 mb-4 block">Vue d'ensemble</span>
            <div class="h-[1px] w-16 bg-red-800 mx-auto mb-10"></div>
            <h2 class="text-4xl md:text-5xl font-extrabold leading-tight tracking-tight uppercase">
                L'Agenda
                <span class="italic font-light text-red-900 lowercase block mt-2" style="font-family: 'Cinzel', serif;">
                    De l'APACC-M
                </span>
            </h2>
        </div>

        <div class="bg-white p-8 md:p-12 shadow-lg border border-gray-100">
            @php
                // Logique pour générer le calendrier
                $month = date('n'); // Mois actuel (1-12)
                $year = date('Y'); // Année actuelle
                $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                $firstDayOfWeek = (int)date('N', strtotime("$year-$month-01")); // 1 (Lundi) à 7 (Dimanche)
                setlocale(LC_TIME, 'fr_FR.UTF-8', 'fra');
            $formatter = new IntlDateFormatter(
    'fr_FR',
    IntlDateFormatter::LONG,
    IntlDateFormatter::NONE,
    null,
    null,
    'MMMM yyyy'
);

$monthName = $formatter->format(new DateTime("$year-$month-01"));
                // === CORRECTION : Tableau de traduction des mois pour le parsing de date ===
                $months = [
                    'janvier'   => 'January',
                    'fevrier'   => 'February',
                    'mars'      => 'March',
                    'avril'     => 'April',
                    'mai'       => 'May',
                    'juin'      => 'June',
                    'juillet'   => 'July',
                    'août'      => 'August',
                    'septembre' => 'September',
                    'octobre'   => 'October',
                    'novembre'  => 'November',
                    'décembre'  => 'December',
                ];
            @endphp

            <div class="mb-8 text-center">
                <h3 class="text-2xl font-bold tracking-tight uppercase">{{ $monthName }}</h3>
            </div>

            <div class="grid grid-cols-7 gap-2 text-center mb-4">
                <div class="text-[9px] font-black uppercase tracking-widest text-gray-400">L</div>
                <div class="text-[9px] font-black uppercase tracking-widest text-gray-400">M</div>
                <div class="text-[9px] font-black uppercase tracking-widest text-gray-400">M</div>
                <div class="text-[9px] font-black uppercase tracking-widest text-gray-400">J</div>
                <div class="text-[9px] font-black uppercase tracking-widest text-gray-400">V</div>
                <div class="text-[9px] font-black uppercase tracking-widest text-gray-400">S</div>
                <div class="text-[9px] font-black uppercase tracking-widest text-gray-400">D</div>
            </div>

            <div class="grid grid-cols-7 gap-2">
                {{-- Jours vides avant le début du mois --}}
                @for ($i = 1; $i < $firstDayOfWeek; $i++)
                    <div class="aspect-square"></div>
                @endfor

                {{-- Jours du mois --}}
                @for ($day = 1; $day <= $daysInMonth; $day++)
                    @php
                        $hasEvent = false;
                        foreach($events as $event) {
                            // === CORRECTION : On traduit la date avant de la parser ===
                            $englishDateString = strtr(strtolower($event['date']), $months);
                            try {
                                $eventDate = new DateTime($englishDateString);
                                if ($eventDate->format('Y') == $year && $eventDate->format('n') == $month && $eventDate->format('j') == $day) {
                                    $hasEvent = true;
                                    break;
                                }
                            } catch (\Exception $e) {
                                // En cas d'erreur de parsing, on ignore et on continue
                                continue; 
                            }
                        }
                    @endphp
                    <div class="aspect-square flex flex-col items-center justify-center border border-gray-100 {{ $hasEvent ? 'bg-red-900 text-white font-bold' : 'text-gray-600' }} transition-all duration-300 {{ $hasEvent ? 'hover:scale-105 cursor-pointer' : '' }}">
                        <span class="text-sm">{{ $day }}</span>
                        @if($hasEvent)
                            <span class="w-1 h-1 bg-white rounded-full mt-1"></span>
                        @endif
                    </div>
                @endfor
            </div>
        </div>

        <div class="mt-16">
            <h4 class="text-[10px] font-black uppercase tracking-widest text-gray-400 mb-8 text-center">Prochaines dates clés</h4>
            <div class="space-y-4">
                @foreach($events as $event)
                <div class="flex items-center justify-between p-4 bg-white border border-gray-100">
                    <div class="flex items-center gap-4">
                        <span class="text-[9px] font-black uppercase tracking-widest text-red-700">{{ $event['category_label'] }}</span>
                        <h5 class="font-bold text-black uppercase tracking-tighter">{{ $event['title'] }}</h5>
                    </div>
                    <span class="text-[10px] font-bold uppercase tracking-widest text-gray-400">{{ $event['date'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- === AJOUT : Styles pour l'animation de masquage === --}}
<style>
    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-10px);
        }
        60% {
            transform: translateY(-5px);
        }
    }
    .animate-bounce {
        animation: bounce 2s infinite;
    }

    /* Styles pour gérer l'affichage/masquage des événements */
    .hidden-event {
        display: none;
        opacity: 0;
        transform: translateY(20px);
    }

    .event-card {
        transition: all 0.5s ease;
    }
</style>

{{-- === REMPLACEMENT COMPLET : Script de filtrage et d'affichage === --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // État pour savoir si tous les événements sont visibles
    let allEventsVisible = false;
    const discoverMoreBtn = document.getElementById('discoverMore');
    const hiddenEvents = document.querySelectorAll('.hidden-event');
    
    // Gestion du clic sur "Découvrir la suite"
    if (discoverMoreBtn) {
        discoverMoreBtn.addEventListener('click', function() {
            allEventsVisible = !allEventsVisible;
            
            hiddenEvents.forEach(event => {
                if (allEventsVisible) {
                    event.style.display = 'block';
                    // Forcer un reflow pour que la transition s'applique
                    event.offsetHeight;
                    event.style.opacity = '1';
                    event.style.transform = 'translateY(0)';
                    
                    // Modifier le texte et l'icône de la flèche
                    discoverMoreBtn.querySelector('p').textContent = 'Masquer la suite';
                    discoverMoreBtn.querySelector('svg path').setAttribute('d', 'M20 14L26 20L24.6 21.4L20 16.8L15.4 21.4L14 20L20 14Z');
                } else {
                    event.style.opacity = '0';
                    event.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        event.style.display = 'none';
                    }, 500); // Correspond à la durée de la transition

                    // Restaurer le texte et l'icône
                    discoverMoreBtn.querySelector('p').textContent = 'Découvrir la suite';
                    discoverMoreBtn.querySelector('svg path').setAttribute('d', 'M20 26L14 20L15.4 18.6L20 23.2L24.6 18.6L26 20L20 26Z');
                }
            });
        });
    }
    
    // Fonction de filtrage améliorée et rendue globale
    window.filterEvents = function(category, btn) {
        // 1. Mise à jour visuelle des boutons
        document.querySelectorAll('.filter-btn').forEach(b => {
            b.classList.remove('text-red-900', 'border-red-900', 'border-b-2');
            b.classList.add('text-gray-400');
        });
        btn.classList.add('text-red-900', 'border-red-900', 'border-b-2');
        btn.classList.remove('text-gray-400');

        // 2. Filtrage des cartes
        let visibleCount = 0;
        document.querySelectorAll('.event-card').forEach(card => {
            const shouldShow = category === 'all' || card.getAttribute('data-category') === category;
            
            if (shouldShow) {
                card.style.display = 'block';
                visibleCount++;
                
                // Si c'est un des 3 premiers ou si "tout est déjà visible"
                if (visibleCount <= 3 || allEventsVisible) {
                    // Forcer un reflow
                    card.offsetHeight;
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                } else {
                    // Sinon, on le masque en ajoutant la classe
                    card.classList.add('hidden-event');
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 10);
                }
            } else {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                setTimeout(() => { card.style.display = 'none'; }, 500);
            }
        });
        
        // 3. Afficher ou masquer le bouton "Découvrir la suite" selon le contexte
        if (discoverMoreBtn) {
            // Si on filtre et qu'il y a plus de 3 événements correspondants, on montre le bouton
            if (visibleCount > 3 && !allEventsVisible) {
                discoverMoreBtn.style.display = 'flex';
            } else {
                discoverMoreBtn.style.display = 'none';
            }
        }
    };
});
</script>

@endsection