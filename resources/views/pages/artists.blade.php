@extends('layouts.app')

@section('title', 'Réseau d\'Artistes - APACC-M')

@section('content')
<section class="py-20 px-6 max-w-6xl mx-auto">
    <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-4 uppercase tracking-tighter">Réseau d'Artistes</h2>
        <div class="w-24 h-2 bg-gradient-to-r from-red-600 to-amber-500 mx-auto rounded-full mb-8"></div>
        <p class="text-slate-600 max-w-2xl mx-auto text-lg leading-relaxed">
            Notre réseau rassemble des créateurs martiniquais s'inspirant de la culture chrétienne. 
            Découvrez leurs talents et soutenez la création locale.
        </p>
    </div>

    <div class="grid md:grid-cols-3 gap-10">
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
        <div class="group bg-white rounded-[2.5rem] overflow-hidden shadow-sm border border-slate-100 hover:shadow-2xl hover:border-red-100 transition-all duration-500">
            <div class="relative overflow-hidden h-64">
                <img src="https://picsum.photos/seed/{{ $artist['img'] }}/600/500" alt="{{ $artist['name'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
                    <span class="text-white text-xs font-bold uppercase tracking-widest">Voir le portfolio</span>
                </div>
            </div>
            <div class="p-8">
                <h3 class="text-2xl font-bold mb-3 text-slate-900 group-hover:text-red-600 transition-colors">{{ $artist['name'] }}</h3>
                <p class="text-sm text-slate-500 mb-6 leading-relaxed">{{ $artist['desc'] }}</p>
                
                <div class="flex flex-wrap gap-2 mb-8">
                    @foreach($artist['tags'] as $tag)
                        <span class="px-3 py-1 bg-red-50 text-red-600 rounded-lg text-[10px] font-black uppercase tracking-wider border border-red-100">{{ $tag }}</span>
                    @endforeach
                </div>
                
                <button class="flex items-center gap-2 text-red-600 font-black text-xs uppercase tracking-[0.2em] group-hover:gap-4 transition-all">
                    Découvrir l'artiste <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>
        @endforeach
    </div>

    {{-- Appel aux artistes --}}
    <div class="mt-24 bg-red-600 rounded-[3rem] p-12 text-center text-white relative overflow-hidden shadow-2xl shadow-red-600/30">
        <div class="relative z-10">
            <h3 class="text-3xl md:text-4xl font-black mb-4 uppercase tracking-tighter">Vous êtes artiste ?</h3>
            <p class="mb-10 text-red-50 opacity-90 text-lg max-w-xl mx-auto">Partagez votre talent et rejoignez une communauté engagée pour le rayonnement de notre culture.</p>
            <a href="{{ route('contact') }}" class="inline-block px-10 py-5 bg-white text-red-600 rounded-2xl font-black uppercase tracking-widest hover:bg-amber-400 hover:text-slate-900 transition-all transform hover:-translate-y-1">
                Devenir membre du réseau
            </a>
        </div>
        {{-- Décoration --}}
        <div class="absolute -top-12 -right-12 w-64 h-64 bg-white/10 rounded-full"></div>
        <div class="absolute -bottom-12 -left-12 w-48 h-48 bg-amber-400/20 rounded-full blur-2xl"></div>
    </div>
</section>
@endsection