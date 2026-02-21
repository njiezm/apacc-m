@extends('layouts.app')

@section('title', 'Accueil - APACC-M Martinique')

@section('content')

{{-- Section En-tête (Hero) --}}

<header class="pt-20 pb-28 px-6 text-center relative overflow-hidden bg-neutral-350 text-white">

    {{-- Image fond --}}
    <div class="absolute inset-0 z-0 opacity-50 pointer-events-none">
        <div class="w-full h-full bg-[url('images/testok.png')] bg-cover bg-center"></div>
    </div>

    {{-- Gradient --}}
    <div class="absolute inset-0 z-0 bg-gradient-to-b from-black/70 via-black/60 to-black/90 pointer-events-none"></div>

    {{-- CONTENU --}}
    <div class="relative z-10 max-w-4xl mx-auto">
{{-- Logo --}}
<div class="mb-8 opacity-90">
<img src="{{ asset('images/logo.png') }}" alt="Logo APACC-M" class="h-40 mx-auto">
</div>

    <div class="flex flex-col items-center mb-10">
        <span class="font-accent text-[30px] uppercase tracking-[0.4em] text-red-800 mb-4">Martinique</span>
        <div class="h-[1px] w-12 bg-red-200 mb-8"></div>
        
        <h1 class="font-display text-4xl md:text-6xl font-extrabold text-white mb-8 leading-[1.1] tracking-tight" style="text-shadow: 0 0 40px rgba(185,28,28,0.4);">
            Promouvoir l'Art et la <br>
            <span class="italic font-light serif text-red-900" style="font-family: 'Cinzel', serif;">Culture Chrétienne</span>
        </h1>
        
        <p class="text-lg text-gray-500 max-w-2xl mx-auto font-light leading-relaxed">
            Valoriser le patrimoine et la création martiniquaise à travers le prisme de l'art et de la culture créole.
        </p>
    </div>
    
    <div class="flex flex-col sm:flex-row justify-center gap-6">
        <a href="{{ route('about') }}" class="px-10 py-4 border border-white/30 text-white text-[11px] font-bold uppercase tracking-widest hover:bg-white hover:text-black transition-all duration-500">
            L'Association
        </a>
        <a href="{{ route('events') }}" class="px-10 py-4 border border-gray-200 text-white text-[11px] font-bold uppercase tracking-widest hover:border-black transition-all duration-500">
            Nos Événements
        </a>
    </div>
</div>


</header>

{{-- Section Actualités --}}

<section class="py-28 px-6 max-w-7xl mx-auto bg-neutral-100">
<div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 gap-6">
<div class="space-y-2">
<h2 class="font-accent text-[10px] uppercase tracking-[0.4em] text-gray-400">Actualités</h2>
<h3 class="text-3xl font-extrabold tracking-tighter uppercase">Dernières Réflexions</h3>
</div>
<div class="h-[1px] flex-grow bg-gray-100 mx-8 hidden md:block"></div>
{{-- Correction de la route inexistante 'news' vers 'events' --}}
<a href="{{ route('events') }}" class="text-[10px] font-bold uppercase tracking-widest border-b border-black pb-1 hover:text-red-700 hover:border-red-700 transition">Voir tout</a>
</div>

@php
    $articles = [
        [
            'slug' => 'sacre-en-couleurs',
            'title' => 'Atelier (réservé aux adultes)',
            'date' => '28 Fév. 2026',
            'category' => 'Atelier',
            'excerpt' => 'Plongez dans l’élégance de l’écriture à la plume et découvrez les bases de la calligraphie italique, telle qu’elle se pratiquait au XVIᵉ siècle.  Lors de cet atelier d’initiation, vous apprendrez à former les minuscules et majuscules, à manier la plume avec précision et à goûter à la beauté du geste lent et maîtrisé.',
            'image' => 'atelier28'
        ],
        [
            'slug' => 'patrimoine-religieux-2026',
            'title' => 'Sauvegarde du patrimoine 2026',
            'date' => '05 Fév. 2026',
            'category' => 'Patrimoine',
            'excerpt' => 'Lancement de notre nouvelle campagne d\'inventaire des calvaires de l\'île.',
            'image' => 'church'
        ],
        [
            'slug' => 'nouveaux-artistes-reseau',
            'title' => 'Le réseau s\'agrandit',
            'date' => '28 Janv. 2026',
            'category' => 'Réseau',
            'excerpt' => 'Trois nouveaux sculpteurs nous rejoignent pour promouvoir l\'artisanat chrétien.',
            'image' => 'artist'
        ]
    ];
@endphp

<div class="grid md:grid-cols-3 gap-12">
    @foreach($articles as $article)
    <article class="group cursor-pointer">
        {{-- Conteneur en forme d'Arche --}}
        <div class="arch-container w-full mb-8 overflow-hidden transition-transform duration-700 group-hover:shadow-lg">
            <div class="overflow-hidden" style="border-radius: 50% 50% 0 0 / 40% 40% 0 0;">
                <img src="{{ asset("images/{$article['image']}.jpeg") }}" 
                     alt="{{ $article['title'] }}" 
                     class="w-full aspect-[3/4] object-cover transition-transform duration-1000 group-hover:scale-110 grayscale hover:grayscale-0">
            </div>
        </div>
        
        <div class="space-y-4">
            <div class="flex items-center gap-4">
                <span class="text-[9px] font-black uppercase tracking-widest text-red-700">{{ $article['category'] }}</span>
                <span class="h-[1px] w-4 bg-gray-200"></span>
                <span class="text-[9px] font-bold uppercase tracking-widest text-gray-400">{{ $article['date'] }}</span>
            </div>
            
            <h4 class="text-xl font-bold leading-tight group-hover:text-red-900 transition-colors">
                {{ $article['title'] }}
            </h4>
            
            <p class="text-sm text-gray-500 font-light leading-relaxed line-clamp-2">
                {{ $article['excerpt'] }}
            </p>
            
            <div class="pt-4">
                <a href="{{ route('events') }}" class="text-[10px] font-black uppercase tracking-[0.2em] inline-flex items-center gap-2 group/link">
                    Explorer 
                    <span class="transform transition-transform group-hover/link:translate-x-1">→</span>
                </a>
            </div>
        </div>
    </article>
    @endforeach
</div>

</section>

{{-- Section Citation --}}

<section class="py-32 bg-neutral-900 text-center px-6 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-5 pointer-events-none">
    <div class="w-full h-full bg-[url('images/testok.png')] bg-cover bg-center"></div>
</div>
<div class="max-w-3xl mx-auto">
<i class="fas fa-quote-left text-red-100 text-5xl mb-8"></i>
<p class="font-accent text-2xl md:text-3xl text-white leading-relaxed mb-8">
"L'art est le chemin le plus court entre l'homme et Dieu."
</p>
<div class="h-[1px] w-12 bg-red-600 mx-auto"></div>
</div>
</section>

@endsection