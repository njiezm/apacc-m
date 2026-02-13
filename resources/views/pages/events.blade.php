@extends('layouts.app')

@section('title', 'Événements - APACC-M')

@section('content')

@php
    // CONFIGURATION DES ÉVÉNEMENTS - Couleurs mises à jour
    $events = [
        [
            'title' => 'Concert de chants sacrés',
            'date' => '15 Juin 2026',
            'time' => '19h00 - 21h00',
            'location' => 'Église de Balata',
            'category' => 'concert',
            'category_label' => 'Concert',
            'color' => 'red', // Thème Rouge
            'image' => 'concert1',
            'description' => 'Un concert exceptionnel mêlant chants traditionnels et créolisations de pièces sacrées.'
        ],
        [
            'title' => 'Atelier d\'icônes',
            'date' => '8 Juin 2026',
            'time' => '14h00 - 17h00',
            'location' => 'Centre culturel, FDF',
            'category' => 'workshop',
            'category_label' => 'Atelier',
            'color' => 'amber', // Thème Or
            'image' => 'atelier1',
            'description' => 'Initiation à l\'art des icônes chrétiennes avec une touche martiniquaise.'
        ],
        [
            'title' => 'Patrimoine religieux',
            'date' => '5 Juin 2026',
            'time' => '18h00 - 20h00',
            'location' => 'Médiathèque, Schoelcher',
            'category' => 'conference',
            'category_label' => 'Conférence',
            'color' => 'slate', // Thème sobre
            'image' => 'conference1',
            'description' => 'Conférence sur l\'histoire et la préservation du patrimoine religieux de l\'île.'
        ]
    ];
@endphp

{{-- Hero Section avec Overlay Rouge/Sombre --}}
<section class="relative py-32 bg-slate-900 text-center overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://picsum.photos/seed/church/1200/600')] bg-cover bg-center opacity-40"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-red-900/40 to-slate-900/90"></div>
    
    <div class="relative z-10 px-6">
        <span class="inline-block px-5 py-2 bg-amber-500/20 border border-amber-500/40 text-amber-400 rounded-full text-[10px] font-black uppercase tracking-[0.2em] mb-6">
            ✦ Agenda Culturel ✦
        </span>
        <h1 class="text-4xl md:text-7xl font-black text-white uppercase tracking-tighter mb-4">
            Nos <span class="text-red-500 text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-amber-500">Événements</span>
        </h1>
        <p class="text-slate-300 max-w-2xl mx-auto text-lg italic">"Célébrer la foi à travers l'expression artistique."</p>
    </div>
</section>

{{-- Barre de Filtre --}}
<div class="max-w-4xl mx-auto px-6 -mt-10 relative z-30">
    <div class="bg-white p-3 rounded-[2.5rem] shadow-2xl border border-red-50 flex flex-wrap justify-center gap-2">
        <button onclick="filterEvents('all', this)" class="filter-btn active px-8 py-4 bg-red-600 text-white rounded-2xl font-bold transition-all shadow-lg shadow-red-600/30">
            Tous
        </button>
        <button onclick="filterEvents('concert', this)" class="filter-btn px-8 py-4 bg-slate-50 text-slate-600 rounded-2xl font-bold hover:bg-red-50 hover:text-red-600 transition-all">
            Concerts
        </button>
        <button onclick="filterEvents('workshop', this)" class="filter-btn px-8 py-4 bg-slate-50 text-slate-600 rounded-2xl font-bold hover:bg-red-50 hover:text-red-600 transition-all">
            Ateliers
        </button>
        <button onclick="filterEvents('conference', this)" class="filter-btn px-8 py-4 bg-slate-50 text-slate-600 rounded-2xl font-bold hover:bg-red-50 hover:text-red-600 transition-all">
            Conférences
        </button>
    </div>
</div>

<section class="py-24 px-6 bg-white">
    <div class="max-w-7xl mx-auto">
        <div id="eventsGrid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach($events as $event)
            <article class="event-card block transform transition-all duration-500" data-category="{{ $event['category'] }}">
                <div class="bg-white rounded-[3rem] overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl hover:border-red-100 transition-all h-full flex flex-col group">
                    
                    {{-- Image avec badge dynamique --}}
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://picsum.photos/seed/{{ $event['image'] }}/800/600" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000">
                        <div class="absolute top-6 left-6 bg-white/95 backdrop-blur-md px-4 py-2 rounded-xl text-[10px] font-black uppercase tracking-widest text-red-600 shadow-sm border border-red-50">
                            {{ $event['category_label'] }}
                        </div>
                    </div>

                    <div class="p-10 flex-grow">
                        <div class="flex items-center gap-2 text-xs font-bold text-amber-600 uppercase tracking-[0.2em] mb-4">
                            <i class="far fa-calendar-alt text-red-600"></i> {{ $event['date'] }}
                        </div>
                        
                        <h3 class="text-2xl font-bold text-slate-900 mb-4 leading-tight group-hover:text-red-600 transition-colors">
                            {{ $event['title'] }}
                        </h3>
                        
                        <p class="text-slate-500 text-sm leading-relaxed mb-8 line-clamp-2">
                            {{ $event['description'] }}
                        </p>
                        
                        <div class="space-y-4 pt-6 border-t border-slate-50">
                            <div class="flex items-center gap-4 text-sm font-semibold text-slate-700">
                                <div class="w-10 h-10 rounded-xl bg-red-50 flex items-center justify-center text-red-600">
                                    <i class="far fa-clock"></i>
                                </div>
                                {{ $event['time'] }}
                            </div>
                            <div class="flex items-center gap-4 text-sm font-semibold text-slate-700">
                                <div class="w-10 h-10 rounded-xl bg-amber-50 flex items-center justify-center text-amber-600">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                {{ $event['location'] }}
                            </div>
                        </div>
                    </div>

                    <div class="px-10 pb-10">
                        <a href="{{ route('contact') }}" class="block text-center py-4 bg-slate-900 text-white rounded-2xl font-bold hover:bg-red-600 hover:shadow-lg hover:shadow-red-600/20 transition-all uppercase text-[10px] tracking-[0.2em]">
                            Réserver ma place
                        </a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>

{{-- Script de filtrage mis à jour pour les nouvelles couleurs --}}
<script>
    function filterEvents(category, btn) {
        // 1. Mise à jour visuelle des boutons
        document.querySelectorAll('.filter-btn').forEach(b => {
            b.classList.remove('bg-red-600', 'text-white', 'shadow-lg', 'shadow-red-600/30');
            b.classList.add('bg-slate-50', 'text-slate-600');
        });
        btn.classList.add('bg-red-600', 'text-white', 'shadow-lg', 'shadow-red-600/30');
        btn.classList.remove('bg-slate-50', 'text-slate-600');

        // 2. Filtrage des cartes avec animation
        document.querySelectorAll('.event-card').forEach(card => {
            if(category === 'all' || card.getAttribute('data-category') === category) {
                card.style.display = 'block';
                setTimeout(() => { 
                    card.style.opacity = '1'; 
                    card.style.transform = 'translateY(0) scale(1)'; 
                }, 10);
            } else {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px) scale(0.95)';
                setTimeout(() => { card.style.display = 'none'; }, 400);
            }
        });
    }
</script>

@endsection