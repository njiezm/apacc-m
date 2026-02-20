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
            "Notre réseau rassemble des créateurs martiniquais s'inspirant de la culture chrétienne. Découvrez leurs talents et soutenez la création locale."
        </p>
    </div>
</header>

{{-- Grille des Artistes --}}
<div class="grid md:grid-cols-3 gap-16 mb-32">
    @php
        $artists = [
            [
                'name' => 'Marie-Claire Dubois',
                'desc' => 'Peintre spécialisée dans les scènes bibliques en style créole vibrant.',
                'tags' => ['Peinture', 'Art Sacré'],
                'img' => 'artist1'
            ],
            [
                'name' => 'Jean-Baptiste Renard',
                'desc' => 'Sculpteur créant des pièces en bois local inspirées de symboles chrétiens.',
                'tags' => ['Sculpture', 'Bois'],
                'img' => 'artist2'
            ],
            [
                'name' => 'Sophie Léger',
                'desc' => 'Photographe capturant la spiritualité à travers les rituels de l\'île.',
                'tags' => ['Photo', 'Art Visuel'],
                'img' => 'artist3'
            ]
        ];
    @endphp

    @foreach($artists as $artist)
   <div class="group bg-white border border-neutral-200 p-8 hover:shadow-xl transition-all duration-500">
        {{-- Image en Arche --}}
        <div class="w-full mb-8 overflow-hidden">
    <img src="https://picsum.photos/seed/{{ $artist['img'] }}/600/800" 
         alt="{{ $artist['name'] }}" 
         class="w-full aspect-[4/5] object-cover grayscale 
                group-hover:grayscale-0 group-hover:scale-105 
                transition-all duration-700">
</div>

        <div class="space-y-4 px-4">
            <div class="flex justify-center gap-2">
                @foreach($artist['tags'] as $tag)
                    <span class="text-[9px] font-bold uppercase tracking-widest text-red-700 px-2 py-1 bg-red-50 rounded">{{ $tag }}</span>
                @endforeach
            </div>
            
            <h3 class="text-2xl font-bold tracking-tighter uppercase group-hover:text-red-900 transition-colors">
                {{ $artist['name'] }}
            </h3>
            
            <p class="text-sm text-gray-500 font-light leading-relaxed italic">
                {{ $artist['desc'] }}
            </p>
            
            <div class="pt-6">
                <a href="#" class="text-[10px] font-black uppercase tracking-[0.3em] text-black border-b border-gray-200 pb-1 hover:border-red-900 hover:text-red-900 transition-all">
                    Voir le profil →
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>

{{-- Appel aux artistes (Style Solennel) --}}
<div class="bg-black text-white p-12 md:p-24 text-center relative overflow-hidden">
    <div class="relative z-10 max-w-2xl mx-auto">
        <h3 class="font-display text-3xl md:text-5xl font-bold mb-8 uppercase tracking-tighter italic" style="font-family: 'Cinzel', serif;">Vous êtes artiste ?</h3>
        <p class="mb-12 text-gray-400 font-light text-lg leading-relaxed">
            Partagez votre talent et rejoignez une communauté engagée pour le rayonnement de notre culture et de notre foi.
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
@endsection