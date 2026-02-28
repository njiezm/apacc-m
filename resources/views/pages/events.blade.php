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
        'title' => 'Initiation à la calligraphie papale',
        'date' => '31 Janvier 2025',
        'time' => '9h00 - 13h00',
        'location' => 'Saint-Christophe',
        'category' => 'atelier',
        'category_label' => 'Atelier',
        'image' => 'calligraphiepapale',
        'description' => 'Initiation à la calligraphie papale, un art sacré qui exprime la spiritualité.',
        'registration_deadline' => '2025-01-30'
    ],
    [
        'title' => 'Caligraphie et enluminure, Thème : "La Nativité"',
        'date' => '06 et 07 Décembre 2025',
        'time' => '9h00 - 15h00',
        'location' => 'Saint-Christophe',
        'category' => 'atelier',
        'category_label' => 'Atelier',
        'image' => 'caligraphieenluminure',
        'description' => 'Venez apprendre la calligraphie et l\'enluminure dans le thème de la Nativité.',
        'registration_deadline' => '2025-12-05'
    ],
    [
        'title' => 'Initiation à l\'enluminure',
        'date' => '12 Mars 2025',
        'time' => '9h00 - 13h00',
        'location' => 'Saint-Christophe',
        'category' => 'atelier',
        'category_label' => 'Atelier',
        'image' => 'initiationenluminure',
        'description' => 'Initiation à l\'enluminure, un art sacré qui exprime la spiritualité.',
        'registration_deadline' => '2025-03-10'
    ],
    [
        'title' => 'Art sacré : regard croisé sur l\'ethique en créolité',
        'date' => '12 Mars 2025',
        'time' => '19h00',
        'location' => 'Salle RP Gauthier, Paroisse de Bellevue',
        'category' => 'conference',
        'category_label' => 'Conférence',
        'image' => 'conferenceethique',
        'description' => 'Une conférence qui explore les liens entre l\'art sacré, l\'éthique et la créolité dans le contexte martiniquais.',
        'registration_deadline' => '2025-03-10'
    ],
    [
        'title' => 'Atelier de démonstration dorure',
        'date' => '5 Juillet 2025',
        'time' => '14h00 - 17h00',
        'location' => 'Saint-Christophe',
        'category' => 'atelier',
        'category_label' => 'Atelier',
        'image' => 'demonstrationdorure',
        'description' => 'Venez échanger avec un artiste local sur son processus créatif et l\'inspiration de la foi dans son œuvre.',
        'registration_deadline' => '2025-06-30'
    ],
    [
        'title' => 'Grand concert Bélè Légliz 20 ans',
        'date' => '14 Juillet 2025',
        'time' => '16h00',
        'location' => 'Saint-Christophe',
        'category' => 'concert',
        'category_label' => 'Concert',
        'image' => 'concert20ans',
        'description' => 'Venez échanger avec un artiste local sur son processus créatif et l\'inspiration de la foi dans son œuvre.',
        'registration_deadline' => '2025-06-30'
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
            "Une expression artistique et culturelle partagée."
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
                <p class="text-[16px] font-black uppercase tracking-widest text-gray-400 mb-6">Découvrir la suite de nos évènements</p>
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
            <div class="mb-8 flex justify-between items-center">
                <button id="prevMonth" class="p-2 rounded-full hover:bg-gray-100 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                
                <h3 id="currentMonth" class="text-2xl font-bold tracking-tight uppercase"></h3>
                
                <button id="nextMonth" class="p-2 rounded-full hover:bg-gray-100 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
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

            <div id="calendarDays" class="grid grid-cols-7 gap-2">
                {{-- Les jours du calendrier seront générés par JavaScript --}}
            </div>
        </div>
    </div>
</section>

{{-- Modal pour afficher les événements d'une date --}}
<div id="eventModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-lg p-8 max-w-2xl w-full mx-4 max-h-[90vh] overflow-y-auto">
        <div class="flex justify-between items-center mb-6">
            <h3 id="modalDate" class="text-2xl font-bold uppercase tracking-tight"></h3>
            <button id="closeModal" class="text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        
        <div id="modalEvents" class="space-y-4">
            {{-- Les événements seront insérés ici par JavaScript --}}
        </div>
    </div>
</div>

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
    
    /* Styles pour le calendrier */
    .calendar-day {
        aspect-ratio: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border: 1px solid #e5e7eb;
        transition: all 0.3s;
        min-height: 50px;
    }
    
    .calendar-day.has-event {
        background-color: #7f1d1d;
        color: white;
        font-weight: bold;
        cursor: pointer;
    }
    
    .calendar-day.has-event:hover {
        transform: scale(1.05);
    }
    
    .event-indicator {
        width: 6px;
        height: 6px;
        background-color: white;
        border-radius: 50%;
        margin-top: 4px;
    }
    
    /* Styles pour le modal */
    #eventModal {
        transition: opacity 0.3s;
    }
    
    .event-modal-item {
        border-bottom: 1px solid #e5e7eb;
        padding-bottom: 16px;
        margin-bottom: 16px;
    }
    
    .event-modal-item:last-child {
        border-bottom: none;
        margin-bottom: 0;
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
    
    // CALENDRIER INTERACTIF
    // Événements passés à JavaScript
    const events = @json($events);
    
    // État du calendrier
    let currentMonth = new Date().getMonth(); // 0-11
    let currentYear = new Date().getFullYear();
    
    // Éléments du DOM
    const prevMonthBtn = document.getElementById('prevMonth');
    const nextMonthBtn = document.getElementById('nextMonth');
    const currentMonthEl = document.getElementById('currentMonth');
    const calendarDaysEl = document.getElementById('calendarDays');
    
    // Modal
    const eventModal = document.getElementById('eventModal');
    const modalDate = document.getElementById('modalDate');
    const modalEvents = document.getElementById('modalEvents');
    const closeModalBtn = document.getElementById('closeModal');
    
    // Tableau de traduction des mois
    const monthNames = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 
                       'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
    
    // Fonction pour générer le calendrier
    function generateCalendar(month, year) {
        // Mettre à jour le titre du mois
        currentMonthEl.textContent = monthNames[month] + ' ' + year;
        
        // Vider le calendrier
        calendarDaysEl.innerHTML = '';
        
        // Nombre de jours dans le mois
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        
        // Premier jour de la semaine (0-6, où 0 est dimanche)
        const firstDayOfWeek = new Date(year, month, 1).getDay();
        // Ajuster pour que lundi soit 0 et dimanche soit 6
        const adjustedFirstDay = firstDayOfWeek === 0 ? 6 : firstDayOfWeek - 1;
        
        // Ajouter les jours vides avant le début du mois
        for (let i = 0; i < adjustedFirstDay; i++) {
            const emptyDay = document.createElement('div');
            calendarDaysEl.appendChild(emptyDay);
        }
        
        // Ajouter les jours du mois
        for (let day = 1; day <= daysInMonth; day++) {
            const dayEl = document.createElement('div');
            dayEl.className = 'calendar-day';
            dayEl.textContent = day;
            
            // Vérifier si ce jour a des événements
            const dayEvents = getEventsForDay(day, month, year);
            
            if (dayEvents.length > 0) {
                dayEl.classList.add('has-event');
                
                // Ajouter un indicateur visuel
                const indicator = document.createElement('div');
                indicator.className = 'event-indicator';
                dayEl.appendChild(indicator);
                
                // Ajouter un gestionnaire d'événements pour ouvrir le modal
                dayEl.addEventListener('click', function() {
                    openEventModal(day, month, year, dayEvents);
                });
            }
            
            calendarDaysEl.appendChild(dayEl);
        }
    }
    
    // Fonction pour obtenir les événements d'un jour spécifique
    function getEventsForDay(day, month, year) {
        return events.filter(event => {
            // Extraire le jour, le mois et l'année de la date de l'événement
            const dateParts = event.date.split(' ');
            const eventDay = parseInt(dateParts[0]);
            const eventMonthStr = dateParts[1].toLowerCase();
            const eventYear = parseInt(dateParts[2]);
            
            // Tableau de correspondance des mois français vers index (0-11)
            const monthMap = {
                'janvier': 0, 'février': 1, 'mars': 2, 'avril': 3, 'mai': 4, 'juin': 5,
                'juillet': 6, 'août': 7, 'septembre': 8, 'octobre': 9, 'novembre': 10, 'décembre': 11
            };
            
            const eventMonth = monthMap[eventMonthStr];
            
            return (
                eventDay === day &&
                eventMonth === month &&
                eventYear === year
            );
        });
    }
    
    // Fonction pour ouvrir le modal avec les événements du jour
    function openEventModal(day, month, year, dayEvents) {
        // Formater la date pour l'affichage
        const date = new Date(year, month, day);
        const dayNames = ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
        
        // Mettre à jour le titre du modal
        modalDate.textContent = dayNames[date.getDay()] + ' ' + day + ' ' + monthNames[month] + ' ' + year;
        
        // Vider le contenu précédent
        modalEvents.innerHTML = '';
        
        // Ajouter chaque événement au modal
        dayEvents.forEach(event => {
            const eventEl = document.createElement('div');
            eventEl.className = 'event-modal-item';
            
            // Vérifier si la date limite d'inscription est passée
            const today = new Date();
            const registrationDeadline = new Date(event.registration_deadline);
            const isPastDeadline = today > registrationDeadline;
            
            eventEl.innerHTML = `
                <div class="flex items-center gap-4 mb-2">
                    <span class="text-[9px] font-black uppercase tracking-widest text-red-700">${event.category_label}</span>
                    <span class="h-[1px] w-4 bg-gray-200"></span>
                    <span class="text-[9px] font-bold uppercase tracking-widest text-gray-400">${event.time}</span>
                </div>
                
                <h4 class="text-lg font-bold leading-tight uppercase tracking-tighter mb-2">${event.title}</h4>
                
                <p class="text-sm text-gray-500 font-light leading-relaxed mb-3">${event.description}</p>
                
                <div class="flex items-center gap-3 text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-3">
                    <i class="fas fa-map-marker-alt text-red-300"></i>
                    ${event.location}
                </div>
                
                <div class="pt-2">
                    ${isPastDeadline 
                        ? '<button disabled class="inline-block w-full text-center py-3 border border-gray-100 text-[10px] font-black uppercase tracking-[0.2em] bg-gray-100 text-gray-400 cursor-not-allowed">Inscriptions closes</button>'
                        : '<a href="' + (window.location.origin + '/contact') + '" class="inline-block w-full text-center py-3 border border-gray-100 text-[10px] font-black uppercase tracking-[0.2em] hover:bg-black hover:text-white transition-all duration-500">S\'inscrire</a>'
                    }
                </div>
            `;
            
            modalEvents.appendChild(eventEl);
        });
        
        // Afficher le modal
        eventModal.classList.remove('hidden');
        eventModal.classList.add('flex');
    }
    
    // Fonction pour fermer le modal
    function closeEventModal() {
        eventModal.classList.add('hidden');
        eventModal.classList.remove('flex');
    }
    
    // Gestionnaires d'événements pour la navigation du calendrier
    prevMonthBtn.addEventListener('click', function() {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        generateCalendar(currentMonth, currentYear);
    });
    
    nextMonthBtn.addEventListener('click', function() {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        generateCalendar(currentMonth, currentYear);
    });
    
    // Gestionnaire d'événement pour fermer le modal
    closeModalBtn.addEventListener('click', closeEventModal);
    
    // Fermer le modal en cliquant en dehors du contenu
    eventModal.addEventListener('click', function(e) {
        if (e.target === eventModal) {
            closeEventModal();
        }
    });
    
    // Générer le calendrier initial
    generateCalendar(currentMonth, currentYear);
});
</script>

@endsection